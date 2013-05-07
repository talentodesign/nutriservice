<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="ofertas-especiais";
}
?>
    <div id="content">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/oquefazemos/ambientacao.jpg" alt="">            
          </div>
        </div>
        <div id="menu-oquefazemos">
          <ul>

            <li><a href="<?php servidor(); ?>o-que-fazemos/pg/ofertas-especiais"><img src="<?php servidor(); ?>images/oquefazemos/menu/ofertas_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>o-que-fazemos/pg/tipos-de-fornecimento"><img src="<?php servidor(); ?>images/oquefazemos/menu/fornecedores_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>o-que-fazemos/pg/ambientacao-nutriservice"><img src="<?php servidor(); ?>images/oquefazemos/menu/ambientacao_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>o-que-fazemos/pg/eventos-tematicos"><img src="<?php servidor(); ?>images/oquefazemos/menu/eventos_off.png" alt="" class="botao"></a></li>

          </ul>
        </div>

        <?php if ($pg == "ofertas-especiais") { ?>     
          <div id="area-texto">
             
            <div class="title"><p>Diferenciais para o cliente</p></div>
            <br>
            <div class="conteudo">
              <div class="conteiner">
                <ul>
                  <li class="img"><img src="<?php servidor(); ?>images/oquefazemos/img_bemestar.jpg" alt=""></li>                  
                  <li class="titulo">OFERTA VIDA LEVE </li>
                  <li class="texto"><p><span class="sub">Objetivo: </span>atender os usuários que preferem uma alimentação com menos calorias, seja por prescriçãomédica, seja por iniciativa própria. Frequência: Diária e pré-agendada </p></li>

                  <li class="titulo">Composição:</li>
                  <li class="texto"><p>Salada do dia, Sopa Prato protéico à base de grelhado ou cozido Guarnições: arroz branco e legumes cozidos Suco do dia ; Sobremesa: fruta</p></li>
                </ul>
              </div>

              <div class="conteiner">
                <ul>
                  <li class="img"><img src="<?php servidor(); ?>images/oquefazemos/img_chef_gourrmet.jpg" alt=""></li>                  
                  <li class="titulo">OFERTA ESPECIAL DO CHEFE</li>
                  <li class="texto"><p><span class="sub">Objetivo: </span>atender a um público que busca pratos mais elaborados do que os tradicionais. Frequência: diária, preparado na cozinha e finalizado na frente do usuário.</p>
                  <br/>
                  <br/>
                  <li class="titulo">Composição:</li> <br/>
                  <p>Cada dia um menu diferente. É uma opção para o menu tradicioná-la base de Pastas, Omeletes e Risotos. <br/>
                  O cliente pode se servir deste menu mais salada, bebida e sobremesa do dia.</p>
                </ul>
              </div>              
            </div> 
          </div>    
        <?php } ?>  

        <?php if ($pg == "tipos-de-fornecimento") { ?>     
          <div id="area-texto-tipos">
             
            <div class="title"><p>Tipos de Fornecimento</p></div>
            <br>
            <div class="conteudo">
              <div class="conteiner">
                <ul>
                  <li class="img"><img src="<?php servidor(); ?>images/oquefazemos/img_tipos_de_fornecimentos_01.png" alt=""></li>                  
                  <li class="titulo">RESTAURANTE INDUSTRIAL-CORPORATIVO</li>
                  <li class="texto"><p>Em seus restaurantes corporativos, A NUTRISERVICE   oferece uma variedade de produtos e serviços para além do cardápio tradicional,  visando fornecer aos usuários qualidade, saúde, bem-estar e uma vasta gama de opções.</p>
                    <br/>
                    <br/>
                    <p>Nutrição e saúde se traduzem  em vários conceitos gastronômicos e ambientes que enfatizam a socialização do colaborador em todas as indústrias.</p></li>
                  
                </ul>
              </div>

              <div class="conteiner">
                <ul>
                  <li class="img"><img src="<?php servidor(); ?>images/oquefazemos/img_tipos_de_fornecimentos_02.png" alt=""></li>                  
                  <li class="titulo">SEGMENTO SAÚDE</li>
                  <li class="texto"><p>Fornecemos  rigoroso controle de qualidade e de especialização exigido pelas Instituições de Saúde (Hospitais públicos e Privados).</p>
                    <br/>
                    <br/>
                    <p>Oferecemos dietas adequadas, alimentação balanceada, através de profissionais de nutrição capacitados para seguir as orientações médicas. Tudo isso para proporcionar aos doentes, familiares, médicos, visitantes e funcionários total tranqüilidade, segurança e motivação em um ambiente saudável.</p></li>
                  
                </ul>
              </div>
                          
            </div> 
          </div>    
        <?php } ?>  

        <?php if ($pg == "ambientacao-nutriservice") { ?>  

          <div id="area-texto-ambientacao">             
            <div class="title"><p>Ambientação Nutriservice</p></div>
            <br>
            <div class="conteudo">
              <div class="conteiner">
                <ul>
                  <li class="img"><img src="<?php servidor(); ?>images/oquefazemos/img_ambientacao.png" alt=""></li>
                  <li class="titulo"> AMBIENTAÇÃO</li>
                  <li class="texto"><p>Visando tornar o momento da refeição mais agradável e trazer mais satisfação aos usuários do Restaurante, a NUTRISERVICE  propõe ambientes que enfatizam a socialização e o bem estar  do colaborador em todos os segmentos industriais.
                  <br/>
                  <br/>
                  Trabalhamos a ambientação e layout dos restaurantes com escritórios de arquitetura especializados.
                  </p>                 
                </ul>
              </div>          
                          
            </div> 
          </div>    
        <?php } ?> 

        <?php if ($pg == "eventos-tematicos") { ?>  

          <div id="area-texto-ambientacao">             
            <div class="title"><p>Eventos Temáticos</p></div>
            <br>
            <div class="conteudo">
              <div class="conteiner">                
                <ul>                  
                  <li class="titulo"></li>
                  <li class="texto-eventos"><p>Durante o ano a NUTRISERVICE oferece alguns eventos/campanhas, relacionadas a datas comemorativas, sendo 04 (fixas) sem custo adicional para o cliente, conforme o quadro ao lado. 
                    <br/> 
                    <br/>
                    Mensalmente será oferecido Bolo confeitado como Sobremesa do dia, em Comemoração aos Aniversariantes do Mês.
                  </p>
                </ul>
                <img src="<?php servidor(); ?>images/oquefazemos/calendario-de-eventos-nutriservice.png" alt="">
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

