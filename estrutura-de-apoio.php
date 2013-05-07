<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="garantia-e-qualidade";
}
?>
    <div id="content-estrutura">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/estrutura-de-apoio/slide.png" alt="">            
          </div>
        </div>
        <div id="menu">
          <ul>
            <li><a href="<?php servidor(); ?>estrutura-de-apoio/pg/garantia-e-qualidade"><img src="<?php servidor(); ?>images/estrutura-de-apoio/menu/images/garantia_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>estrutura-de-apoio/pg/seguranca-e-meio-ambiente"><img src="<?php servidor(); ?>images/estrutura-de-apoio/menu/images/seguranca_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>estrutura-de-apoio/pg/compras-e-ti"><img src="<?php servidor(); ?>images/estrutura-de-apoio/menu/images/compras_off.png" alt="" class="botao"></a></li>
            
          </ul>
        </div>

        <?php if ($pg == "garantia-e-qualidade") { ?>     
          <div id="area-texto">             
            <div class="title"><p>Garantia e Qualidade</p></div>
            <br>
            <div class="conteudo">
              <div class="images">
                <img src="<?php servidor(); ?>images/estrutura-de-apoio/qualidade.png" alt=""> 
              </div>
              <div class="texto">
                <p>Para garantir a Segurança dos Alimentos, é preciso que os processos e métodos empregados na manipulação de alimentos estejam validados do ponto de vista sanitário, acompanhando as evoluções de mercado e as orientações das legislações e bibliografias oficiais vigentes.
                <br/> 
                <br/>
                Sendo assim, a Nutriservice , através do seu Setor de Auditoria de Processos e Qualidade, desenvolve ferramentas e manuais com as diretrizes para a excelência na implantação e manutenção de suas práticas de manipulação, oferecendo assim um produto seguro, reforçando nosso objetivo de ser uma referência.
                <br/>
                <br/> 
                Qualitativa em nosso ramo de atividade.
                <br>                  
                </p>                
              </div>              
            </div> 

          </div>    
        <?php } ?>

        <?php if ($pg == "seguranca-e-meio-ambiente") { ?>     
          <div id="area-texto">             
            <div class="title"><p>Segurança e Meio Ambiente</p></div>
            <br>
            <div class="conteudo">
              <div class="images-seguranca">
                <img src="<?php servidor(); ?>images/estrutura-de-apoio/grafico.png" alt=""> 
              </div>
              <div class="texto-seguranca">
                <p>
                  O Departamento de Qualidade Nutriservice desenvolveu KPI’S para monitorar e evitar perdas de insumos, melhorando assim sua produtividade e contribuindo para reduzir o desperdício e preservar o meio ambiente. 
                  <br/>
                  <br/>
                  <br/>
                  <p class="title"><b>São eles:</b></p>
                  <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle de Resto ingesta <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle de devolução de alimentos pelos clientes. <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle de descarte de óleo. <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle do consumo de água. <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle do consumo de gás natural. <br/>
                  <img src="<?php servidor(); ?>images/estrutura-de-apoio/c.png" alt="">Controle de segurança (acidentes com e sem afastamento) <br/>
                </p>                
              </div>              
            </div> 

          </div>    
        <?php } ?>  

        <?php if ($pg == "compras-e-ti") { ?>     
          <div id="area-texto">             
            <div class="title"><p>Compras e T.I</p></div>
            <br>
            <div class="conteudo">
              <div class="texto-ti">
                <p>
                  <p class="title">COMPRAS e Tecnologia das Informação.</p>
                  <br/>
                  O objetivo do departamento de Compras e T. I. da Nutriservice compreende o desenvolvimento e/ou a aquisição dos melhores produtos, com os melhores preços, com qualidade e entrega garantidas.<br/>
                  Tudo de acordo com as necessidades de nossos clientes internos e externos, o que proporciona uma grande vantagem competitiva. <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>

                  <p class="title">SISTEMA OPERACIONAL – GENIAL</p>
                  <br>
                  <b>Vantagens:</b> <br/><br/>
                  • Analisa custos e otimiza recursos; <br/><br/>
                  • Possibilita o monitoramento total do almoxarifado, permitindo o acompanhamento da movimentação dos produtos e a identificação de desvios de estoque, através do inventário rotativo; <br><br/>
                  • Compara os custos planejados com os realizados, através de relatórios gerenciais, garantindo o cumprimento de metas; <br><br/>
                  <br/>
                </p>                
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
