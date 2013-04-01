<?php get_header(); ?>
    <title>Título da Página</title>
  </head>
  <body>
    <div id="content">
      <div id="area_info" class="centraliza">
        <div id="home_slider" class="centraliza">        
            <div id="slide">
              <img src="<?php bloginfo('template_directory'); ?>/images/home_slide/slide_01.png" alt="">
              <img src="<?php bloginfo('template_directory'); ?>/images/home_slide/slide_01.png" alt="">
              <img src="<?php bloginfo('template_directory'); ?>/images/home_slide/slide_01.png" alt="">
            </div>
          </div>

          <div id="oque_fazemos">
            <img src="<?php bloginfo('template_directory'); ?>/images/oque_fazemos.png" alt=""> <br/>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/botao_oquefazemos_off.png" alt="" class="botao"></a>
          </div>

          <div id="dicas">
            <img src="<?php bloginfo('template_directory'); ?>/images/dicas.png" alt=""> <br/>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/botao_dicas_off.png" alt="" class="botao"></a>
          </div>

          <div id="fala-conosco">
            <img src="<?php bloginfo('template_directory'); ?>/images/fale_conosco.png" alt=""> <br/>
            <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/botao_fale_conosco_off.png" alt="" class="botao"></a>
          </div>
        </div>

        <div id="nutri_news">
          <div id="news" class="centraliza">
            <div id="area_news">
              <img src="<?php bloginfo('template_directory'); ?>/images/img_news.png" alt="" class="img_news">      
              <img src="<?php bloginfo('template_directory'); ?>/images/titulo_news.png" alt="" class="titulo">

            </div>
          </div>
        </div>
      </div>     
    </div>   

<?php get_footer(); ?>
