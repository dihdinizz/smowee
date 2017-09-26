@extends ('layout.master')

@section('content')
  <!-- Header -->
  <header>
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Smowee 4:20</div>

        <div class="intro-heading">Queimando Preconceitos</div>
      </div>
    </div>
  </header>
  <!-- Header -->
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="about-bg">
          <div class="about-caption">
            <h2 class="section-heading">QUEM SOMOS</h2>

            <p>
              O Smowee é uma marca canábica brasileira, criada em 2015, preocupada com a disseminação e conscientização da planta Cannabis Sativa, através de ferramentas sociais disseminamos conhecimentos e notícias sobre o Mundo Canábico, além de facilitar o dia a dia através de soluções tecnológicas focadas e pensadas especificamente para o nosso público 420.
            </p>
            <img class="mobile" width="100%" style="margin-bottom:10px" src="/img/about/about-bg.jpg" />
            <p>
              Nós queremos representar uma ideia positiva, com uma equipe de profissionais dedicados e amantes da Cannabis, buscamos sempre oferecer um trabalho de qualidade que contribua com o desenvolvimento de um mundo mais consciente e melhor.
            </p>
            <p>
              Nossa missão é mostrar para a sociedade que a nossa comunidade 420 é formada por pessoas do bem e acabar com este estereótipo negativo em relação ao “maconheiro”, e que o fato de você ser como a gente, um amante e usuário consciente da planta, não faz de você menos capacitado que uma pessoa “normal”.
            </p>
            <p style="font-size:12pt" class="yellow">
              Você poderá nos ajudar a construir essa História.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->
  <!-- News -->
  <section id="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Blog Smowee</h2>
          <h3 class="section-subheading text-muted">Veja as postagens mais recentes do nosso blog.</h3>
        </div>
      </div>

      <div class="row">
        <div class="news-flex">
          <div class="news-grid-middle">
            <div class="news-recents ">
              <div class="news-img" style="background-image: url('img/news/recents/recents-1.jpg')">
                <div id="news-cat-1" class="news-cat">
                  Saúde
                </div>
              </div>

              <div class="news-caption">
                <h4>Título da Postagem</h4>
              </div>
            </div>

            <div class="news-recents">
              <div class="news-img" style="background-image: url('img/news/recents/recents-2.jpg')">
                <div id="news-cat-3" class="news-cat">
                  Tecnologia
                </div>
              </div>

              <div class="news-caption">
                <h4>Título da Postagem</h4>
              </div>
            </div>
          </div>

          <div class="news-grid-bottom">
            <div class="news-recents">
              <div class="news-img" style="background-image: url('img/news/recents/recents-3.jpg')">
                <div id="news-cat-2" class="news-cat">
                  Cotidiano
                </div>
              </div>
              <div class="news-caption">
                  <h4>Título da Postagem</h4>
              </div>
            </div>

            <div class="news-recents">
              <div class="news-img" style="background-image: url('img/news/recents/recents-4.jpg')">
                <div id="news-cat-4" class="news-cat">
                  Economia
                </div>
              </div>

              <div class="news-caption">
                <h4>Título da Postagem</h4>
              </div>
            </div>

            <div class="news-recents">
              <div class="news-img" style="background-image: url('img/news/recents/recents-5.jpg')">
                <div id="news-cat-1" class="news-cat">
                  Saúde
                </div>
              </div>

              <div class="news-caption ">
                <h4>Título da Postagem</h4>
              </div>
            </div>

            <div class="news-recents">
              <div class="news-img" style="background-image: url('img/news/recents/recents-6.jpg')">
                <div id="news-cat-4" class="news-cat">Economia</div>
              </div>

              <div class="news-caption">
                <h4>Título da Postagem</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- News -->
  <!-- Botões Páginas -->
  <section id="home-buttons">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading ">Conheça nossas idéias</h2>
        </div>
      </div>

      <div class="row">


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/soon.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Clube de Benefícios</h4>
            <p class="text-muted">O Clube de Benefícios Smowee é voltado para o usuário do Mundo Cannábico, onde reunimos os melhores serviços relacionados a nossa comunidade em um só lugar. Através de parcerias selecionadas, nossa proposta é trazer um novo conceito e juntar a galera 420.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/soon.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Faro Fino</h4>
            <p class="text-muted">O Faro Fino é um dos nossos projetos pioneiros em contribuição a nossa comunidade 420, um comparativo de preços das Tabacarias Online para que os nossos membros sempre encontrem a melhor oferta.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="#" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="smowee-icon"></div>
            </div>
            <img src="/img/soon.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
              <h4>APP Smowee</h4>
              <p class="text-muted">O App Smowee terá um formato único no Brasil. A sua função será facilitar a vida de quem quer aproveitar ao máximo seu momento 420 (Lançamento Inicial em São Paulo).</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Botões Páginas -->
  <!-- Paralax -->
  <section id="paralax">
    <div class="row">
      <div class="paralax-bg" data-speed="15">
        <span>Acreditamos que um trabalho de conscientização é mais eficaz que a política de repreensão. Baseado em estudos realizados sobre a descriminalização e/ou legalização da Cannabis, pode se notar que o impacto social é de maioria positiva.</span>
      </div>
    </div>
  </section>
  <!-- Paralax -->
  <!-- Instagram -->
  <section id="instagram">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Instagram Smowee</h2>
        </div>
      </div>

      <div class="row">
        <div id="instafeed"></div>
      </div>
    </div>
  </section >
  <!-- Instagram -->
@endsection
