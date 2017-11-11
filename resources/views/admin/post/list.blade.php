@extends ('admin.master')
{{-- TITULO; IMAGEM CAPA; CATEGORIA; TAG; CONTEUDO--}}
@section ('content')
    <h4>
        Matérias 
        <a href="/posts/create">
            <button class="btn btn-success btn-admin-header">Nova matéria</button>
        </a>
    </h4>
    <hr>
    <table class="table table-striped table-admin">
        <tr>
            <th>Nome</th>
            <th><i class="fa fa-tag"></i></th>
            <th><i class="fa fa-eye"></i></th>
            {{--<th><i class="fa fa-thumbs-up"></i></th>--}}
            <th><i class="fa fa-calendar"></i></th>
            <th></th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->slug }}</td>
                {{--<td>{{ $post->tags }}</td>--}}
                <td>
                    @foreach (explode(',', $post->tags) as $tag)
                        <span class="label label-success">{{$tag}}</span>
                    @endforeach
                </td>
                <td>{{ $post->views }}</td>
                {{--<td>{{ $post->up_votes }}</td>--}}
                <td>
                    {{ Carbon\Carbon::parse($post->publish_date)->format('d/m/Y') }}
                </td>
                <td class="text-right">
                    <a href="{{ action('PostController@edit', $post['id']) }}">
                        <i class="fa fa-pencil admin-post__action"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-times admin-post__action"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection