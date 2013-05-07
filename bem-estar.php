<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="campanhas";
}
?>
    <div id="content-bem-estar">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/bem-estar/bem-estar.jpg" alt="">            
          </div>
        </div>
        <div id="menu">
          <ul>
            <li><a href="<?php servidor(); ?>bem-estar/pg/campanhas"><img src="<?php servidor(); ?>images/bem-estar/menu/campanhas_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>bem-estar/pg/dicas"><img src="<?php servidor(); ?>images/bem-estar/menu/dicas_off.png" alt="" class="botao"></a></li>
            
          </ul>
        </div>

        <?php if ($pg == "campanhas") { ?>     
          <div id="area-texto">             
            <div class="title"><p>Campanha de Consumo Consciente</p></div>
            <br>
            <div class="conteudo">
              <div class="images">
                <img src="<?php servidor(); ?>images/bem-estar/img_1.jpg" alt="" class="img-text-01"> 
                <img src="<?php servidor(); ?>images/bem-estar/img_2.jpg" alt="" class="img-text-02">
              </div>
              <div class="texto">
                <p class="text-01"> 
                  Com esta campanha de Reeducação Alimentar, a
                  Nutriservice disponibiliza seu corpo técnico para prestar
                  orientação nutricional aos colaboradores do cliente,
                  através de um trabalho de antropometria, além da
                  divulgação de diversos materiais relacionados a
                  hábitos alimentares saudáveis. Entre elas, dicas sobre a
                  correta interpretação e utilização da pirâmide alimentar,
                  alimentos funcionais, entre outros.  
                </p>

                <p class="text-02">                  
                  A NUTRISERVICE tem uma preocupação constante com o meio ambiente e para reforçar a sua importância criamos a “Campanha Consumo Consciente: atitude que transforma.”.Uma campanha interativa composta por diversas peças com o objetivo de: reduzir, reutilizar e reciclar, para educar e conscientizar sobre a importância da prática de pequenas atitudes que garantem o futuro de nosso planeta.Com o objetivo de informar e conscientizar, essa ação é focada em nosso negócio “Alimentos”, mas sem esquecer de citar o consumo consciente de outros temas como: água, papel, plástico e reciclagem.
              </div>              
            </div> 

          </div>    
        <?php } ?>  

        <?php if ($pg == "dicas") { ?>     
          <div id="area-texto">             
            <div class="title"><p>Confira nossas dicas, receitas, curiosidades..</p></div>
            <br>
            <div class="conteudo-dicas">
              <div class="images">
                <img src="<?php servidor(); ?>images/bem-estar/dicas/ima-dicas.png" alt="" class="img-text-01"> 
              </div>
              <div class="texto">
                <p class="titulo">Salada Constance</p>
                <p class="text-01">
                  <b>Tipo de Culinária:</b> Culinária Popular 
                  <br/>
                  <br/>
                  <b>Categoria:</b> Entradas 
                  <br/>
                  <br/>
                  <b>Subcategorias:</b> Saladas (frias e quentes) 
                  <br/>
                  <br/>
                  <b>Rendimento:</b> 4 porções <br/>
                </p> 
                <a href="<?php servidor(); ?>dicas-receitas/pg/salada-constance"><p class="voltar">Clique aqui para ver a receita completa! <img src="<?php servidor(); ?>images/bem-estar/dicas/bc.png" alt=""></p></a>
              </div>              
            </div>
          </div>

          <div id="area-texto">
            <div class="conteudo-dicas">
              <div class="images">
                <img src="<?php servidor(); ?>images/bem-estar/dicas/ima-dicas-02.png" alt="" class="img-text-01"> 
              </div>
              <div class="texto">
                <p class="titulo">QHICHE DE ABOBRINHA</p>
                <p class="text-01">
                  <b>Tipo de Culinária:</b> Culinária Popular 
                  <br/>
                  <br/>
                  <b>Categoria:</b> Entradas 
                  <br/>
                  <br/>
                  <b>Subcategorias:</b> Saladas (frias e quentes) 
                  <br/>
                  <br/>
                  <b>Rendimento:</b> 4 porções <br/>
                </p> 
                <a href="<?php servidor(); ?>dicas-receitas/pg/qhiche-de-abobrinha"><p class="voltar">Clique aqui para ver a receita completa! <img src="<?php servidor(); ?>images/bem-estar/dicas/bc.png" alt=""></p></a>
              </div>              
            </div>
          </div>

          <div id="area-texto">
            <div class="conteudo-dicas">
              <div class="images">
                <img src="<?php servidor(); ?>images/bem-estar/dicas/ima-dicas.png" alt="" class="img-text-01"> 
              </div>
              <div class="texto">
                <p class="titulo">Salada Constance</p>
                <p class="text-01">
                  <b>Tipo de Culinária:</b> Culinária Popular 
                  <br/>
                  <br/>
                  <b>Categoria:</b> Entradas 
                  <br/>
                  <br/>
                  <b>Subcategorias:</b> Saladas (frias e quentes) 
                  <br/>
                  <br/>
                  <b>Rendimento:</b> 4 porções <br/>
                </p> 
                <a href=""><p class="voltar">Clique aqui para ver a receita completa! <img src="<?php servidor(); ?>images/bem-estar/dicas/bc.png" alt=""></p></a>
              </div>              
            </div>
          </div>
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

