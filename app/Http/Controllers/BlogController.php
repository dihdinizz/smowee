<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Post;

class BlogController extends Controller
{
    public function index() {
      // LISTAGEM DE TODOS POSTS
      // QUE PUDEREM SER VISTOS COM BASE NA DATA DE PUBLICACAO
      $posts = DB::table('posts')
          ->join('posts_categories', 'posts.category_id', '=', 'posts_categories.id')
          ->whereDate('posts.publish_date', '<=', Carbon::now())
          ->whereNull('deleted_at')
          ->select(
            'posts.*',
            'posts_categories.name as category_name',
            'posts_categories.color as category_color')
          ->latest()
          ->get();
      // VARIAVEIS PARA SOCIAL METATAGS
      $ogUrl = URL::current();
      $ogType = 'website';
      $ogTitle = 'Smowee 420 - Blog';
      // INFINITY SCROLLER
      // RETORNAR VIEW COM TODOS OS POSTS
      return view('blog.posts', compact(['posts', 'ogUrl', 'ogType', 'ogTitle']));
    }

    public function single(Request $request, $slug) {
      // PROCURAR O SINGLE POST SE ELE JÁ PUDER SER VISTO
      // COM BASE NA DATA DE PUBLICACAO
      $post = DB::table('posts')
          ->join('posts_categories', 'posts.category_id', '=', 'posts_categories.id')
          ->join('users', 'posts.writer_id', '=', 'users.id')
          ->where('slug', $slug)
          ->whereNull('deleted_at')
          ->whereDate('publish_date', '<=', Carbon::now())
          ->select(
            'posts.*',
            'posts_categories.name as category_name',
            'users.name as writer')
          ->get();

      if (count($post) < 1) return false;
      // INCREMENTA VIEW + 1
      DB::table('posts')->where('slug', $slug)->increment('views');
      // TRATA AS TAGS PARA RENDERIZA-LAS SEPARADAMENTE
      $tags = explode(',', $post[0]->tags);
      // TRATA DATA 
      $date = Carbon::createFromFormat('Y-m-d', $post[0]->publish_date)->format('d/m/Y');
      // VARIAVEIS PARA SOCIAL METATAGS
      $ogUrl  = URL::current();
      $ogType = 'article';
      $ogTitle = $post[0]->title;
      // RETORNAR VIEW PARA RENDER DO POST
      return view('blog.post', compact(['post', 'tags', 'date', 'ogUrl', 'ogType', 'ogTitle']));
    }
}
