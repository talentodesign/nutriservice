<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="12-jan";
}
?>
    <div id="content-noticias">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/noticias/slide.png" alt="">            
          </div>
        </div>
        <div id="menu">
          <ul>
            <li><img src="<?php servidor(); ?>images/noticias/noticias.png" alt="" class="botao"></li>           
          </ul>
        </div>

        <div id="titulos-noticias">
          <hr>
          <a href="<?php servidor(); ?>noticias/pg/12-jan"><div class="data"><p>12 JAN</p></div></a>
          <a href="<?php servidor(); ?>noticias/pg/12-jan"><div class="prev"><p>Lançamento do Site da Nutriservice</p></div></a>
          <hr>
          <hr>
          <a href=""><div class="data"><p>12 JAN</p></div></a>
          <a href=""><div class="prev"><p>Lançamento do Site da Nutriservice</p></div></a>
          <hr>
          <hr>
          <a href=""><div class="data"><p>12 JAN</p></div></a>
          <a href=""><div class="prev"><p>Lançamento do Site da Nutriservice</p></div></a>
          <hr>
          <hr>
          <a href=""><div class="data"><p>12 JAN</p></div></a>
          <a href=""><div class="prev"><p>Lançamento do Site da Nutriservice</p></div></a>
          <hr>
          <hr>
          <a href=""><div class="data"><p>12 JAN</p></div></a>
          <a href=""><div class="prev"><p>Lançamento do Site da Nutriservice</p></div></a>
          <hr>
        </div>

        <?php if ($pg == "12-jan") { ?> 
          <div id="conteudo">
            <div class="titulo">
              <p>Lançamento do Site da Nutriservice</p>
            </div>
            <div class="image">
              
            </div>  
            <div class="texto">
              <p>
                Está no ar o site Nutriservice, mais dinãmico e interativo, a ferramenta tem como objetivo ser um canal de comunicação com os clientes, quem assina pelo projeto e a empresa Talento Design.                                  
              </p>
            </div>
        </div>
        <?php } ?>

        <?php if ($pg == "") { ?>
        <?php } ?>  

        <?php if ($pg == "") { ?>
        <?php } ?>        

      </div>          
        <div id="voltar" class="centraliza"> 
          <div class="link">
            <a href="<?php servidor(); ?>index"><p>voltar a página inicial <img src="<?php servidor(); ?>images/institucional/bt_voltar.png" alt=""></p></a>
          </div>         
        </div>
    </div>
      <div id="footer">
        <?php include("footer.php") ?>
      </div>
  </body>
</html>
