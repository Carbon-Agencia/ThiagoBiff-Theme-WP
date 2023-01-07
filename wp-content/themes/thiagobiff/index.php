<?php get_header(); ?>

  <!--HOME-->
  <?php
    if(have_posts()){

      while( have_posts ){

        the_post();
        the_content();
      }

    }
  ?>

  <section id="home">
    <div class="wrapper" id="homeToScroll">
      <div class="column-left"></div>
      <div class="column-right"></div>
      <div class="col-b">
        <div class="column-bottom">
          <p>Projeto de Interiores</p>
        </div>
        <div class="owl-one owl-carousel owl-theme">
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/spacejoy-PyeXkOVmG1Y-unsplash.jpg"
              alt="light home background image">
          </div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/spacejoy-x3mSC1WnWhc-unsplash.jpg"
              alt="home room background image"></div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/spacejoy-PyeXkOVmG1Y-unsplash.jpg"
              alt="home design background image">
          </div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/spacejoy-x3mSC1WnWhc-unsplash.jpg"
              alt="red house background image"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="about">
    <div class="wrapper">
      <div class="col-a">
        <header>
          <h1><?php the_title(); ?>Sobre Nós</h1>
          <p>Buscando a realização de nosso Sonho, assim nasceu a THIAGO BIFF. De um Sonho
            para a realização do seu Sonho. Uma empresa que busca o exclusivo, do clássico ao
            moderno, produzindo requinte, modernidade e luxo a tudo que arquitetura pode
            oferecer.
            <br><br>
            Uma empresa que busca atender a necessidade de uma arquitetura de Luxo, onde a
            riqueza dos detalhes completam os projetos, assim dando asas a nossa criatividade
            para alçar voos na busca da consolidação do seu sonho.
            <br><br>
            De um Sonho para seu Sonho, Thiago biff Arquitetura de Festa desenvolve soluções
            inovadoras e surpreendentes para cerimônias religiosas, eventos corporativos e festas.
            No Projeto de decoração, e gerenciamento do grande dia, enxergamos o evento como
            um todo, de ponta a ponta, e cuidamos de cada detalhe com profissionalismo, para
            garantir que cada evento seja único.
          </p>
          <br>
          <a href="https://www.instagram.com/thiagobiffarq/" target="_blank">Saiba Mais</a>
        </header>
      </div>
      <div class="col-b">
        <img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-X5BWooeO4Cw-unsplash.jpg" alt="">
        <!-- <img class="sqr-design" src="assets/backgrounds/square-design.png" alt=""> -->
      </div>
      <div class="col-c">
        <img class="widesqr" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/spacejoy-x3mSC1WnWhc-unsplash.jpg" alt="">     
        <img class="sqr" src="<?php echo get_template_directory_uri();?>/assets/backgrounds/square.png" alt="">  
      </div>
    </div>
  </section>
  <section id="what">
    <div class="wrapper">
      <header class="col-d">
        <h2>O que<br>Fazemos</h2>
      </header>
        <div class="col col-a"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-X5BWooeO4Cw-unsplash.jpg" alt="">
          <div class="descriptions">
            <h3>Gerenciamento <br> de obras</h3>
            <p>Já imaginou o tão sonhado dia ser perfeito, tudo exatamente como você sempre planejou? Nossa equipe com
              mais de 10 anos em experiência em grandes eventos oferece a você um projeto cenográfico completo com:
              Projeto 3D, Fotorrealismo, Projeto técnico executivo e quantitativo e acompanhamento de execução para que
              tudo seja perfeito</p>
          </div>
        </div>
        <div class="col col-b"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt="">
          <div class="descriptions">
            <h3>Gerenciamento <br> de obras</h3>
            <p>Já imaginou o tão sonhado dia ser perfeito, tudo exatamente como você sempre planejou? Nossa equipe com
              mais de 10 anos em experiência em grandes eventos oferece a você um projeto cenográfico completo com:
              Projeto 3D, Fotorrealismo, Projeto técnico executivo e quantitativo e acompanhamento de execução para que
              tudo seja perfeito</p>
          </div>
        </div>
        <div class="col col-c"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-l2jk-uxb1BY-unsplash.jpg" alt="">
          <div class="descriptions">
            <h3>Gerenciamento <br> de obras</h3>
            <p>Já imaginou o tão sonhado dia ser perfeito, tudo exatamente como você sempre planejou? Nossa equipe com
              mais de 10 anos em experiência em grandes eventos oferece a você um projeto cenográfico completo com:
              Projeto 3D, Fotorrealismo, Projeto técnico executivo e quantitativo e acompanhamento de execução para que
              tudo seja perfeito</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio">
    <div class="wrapper">
      <header class="col-a">
        <h2>Portfólio</h2>
        <ul class="filter">
          <li class="item-portfolio active" data-filter="todos">Todos</li>
          <li class="item-portfolio" data-filter="comerciais">Comerciais</li>
          <li class="item-portfolio" data-filter="residenciais">Residenciais</li>
          <li class="item-portfolio" data-filter="festas">Festas</li>
        </ul>
        <ul class="itens-portfolio">
          <li class="item-portfolio comerciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio comerciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio residenciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio residenciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio residenciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio residenciais"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio festas"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio festas"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
          <li class="item-portfolio festas"><img src="<?php echo get_template_directory_uri();?>/assets/backgrounds/hutomo-abrianto-9mPl0Zo7_gQ-unsplash.jpg" alt=""><p>Residencial - DB <br> Maracajá / SC</p></li>
        </ul>
      </header>
  </section>
  <section id="feedback">
    <div class="wrapper">
      <div class="col-a">
        <header>
          <h2>Experiência</h2>
        </header>
        <div class="col-b">
          <div class="owl-two owl-carousel owl-theme">
            <div class="item">
              <p>“É de excelente qualidade o trabalho do arquiteto Thiago Emerim. Tanto pelo material que utiliza,
                quanto pelo design e aproveitamento dos espaços. Sempre adotando conceitos modernos e compatíveis às
                necessidades do cliente. Thiago Emerim é um profissional talentoso e vocacionado, pois ama o que faz. Eu
                super indico!!”</p>
              <p>J.G <br> Araranguá - SC</p>
            </div>
            <div class="item">
              <p>“É de excelente qualidade o trabalho do arquiteto Thiago Emerim. Tanto pelo material que utiliza,
                quanto pelo design e aproveitamento dos espaços. Sempre adotando conceitos modernos e compatíveis às
                necessidades do cliente. Thiago Emerim é um profissional talentoso e vocacionado, pois ama o que faz. Eu
                super indico!!”</p>
              <p>J.G <br> Araranguá - SC</p>
            </div>
            <div class="item">
              <p>“É de excelente qualidade o trabalho do arquiteto Thiago Emerim. Tanto pelo material que utiliza,
                quanto pelo design e aproveitamento dos espaços. Sempre adotando conceitos modernos e compatíveis às
                necessidades do cliente. Thiago Emerim é um profissional talentoso e vocacionado, pois ama o que faz. Eu
                super indico!!”</p>
              <p>J.G <br> Araranguá - SC</p>
            </div>
            <div class="item">
              <p>“É de excelente qualidade o trabalho do arquiteto Thiago Emerim. Tanto pelo material que utiliza,
                quanto pelo design e aproveitamento dos espaços. Sempre adotando conceitos modernos e compatíveis às
                necessidades do cliente. Thiago Emerim é um profissional talentoso e vocacionado, pois ama o que faz. Eu
                super indico!!”</p>
              <p>J.G <br> Araranguá - SC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="medias">
    <div class="wrapper">
      <div class="col-a">
        <header>
          <h2>Siga-me no instagram e fique por dentro de meus projetos</h2>
        </header>
        <div>
          <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-f4b638c6-5def-45c9-b974-c8eb84b5b715"></div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>