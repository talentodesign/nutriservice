<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="institucional";
}
?>
    <div id="content-institucional">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/institucional/slide.png" alt="">            
          </div>
        </div>
        <div id="menu">
          <ul>
            <li><a href="<?php servidor(); ?>institucional/pg/institucional"><img src="<?php servidor(); ?>images/institucional/menu/historia_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>institucional/pg/visao-e-valores"><img src="<?php servidor(); ?>images/institucional/menu/visao_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>institucional/pg/nossos-numeros"><img src="<?php servidor(); ?>images/institucional/menu/numeros_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>institucional/pg/clientes"><img src="<?php servidor(); ?>images/institucional/menu/clientes_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>institucional/pg/seguranca"><img src="<?php servidor(); ?>images/institucional/menu/seguranca_off.png" alt="" class="botao"></a></li>
          </ul>
        </div>

        <?php if ($pg == "institucional") { ?>     
          <div id="area-texto">
             
            <div class="title"><p>A EMPRESA</p></div>
            <br>
            <div class="conteudo">
              <p>Com 20 anos de atuação no segmento de Refeições Corporativas, a Nutriservice tem como principal diferencial  a capacidade de adaptação aos diferentes perfis de clientes, de diferentes segmentos.</p>
              <p>Nossa Missão é oferecer serviços de alimentação e nutrição em Restaurantes  industriais ,satisfazendo as necessidades de nossos clientes ,priorizando a segurança, a ética, buscando o crescimento e  contribuindo para o desenvolvimento do país.</p>
              <p>Nossa vocação é servir , ouvir o cliente, está atento aos detalhes, ser  disponível,  pró-ativo, flexível e eficaz.</p>
              <p>Com sede em Recife e filiais  em Maceió –AL, Belém- PA  e Manaus- AM, a Nutriservice possui  uma administração empreendedora e dinâmica, que desenvolve uma política de serviços comprometida em manter um alto padrão de qualidade, de acordo com as melhores práticas de fabricação.</p>
            </div> 

          </div>    
        <?php } ?> 

        <?php if ($pg == "visao-e-valores") { ?>     
          <div id="area-texto">             
            <div class="title"><p>VISÃO</p></div>
            <br>
            <div class="conteudo">
             <p>Ser reconhecido no mercado como empresa referência em administração Geral de Restaurantes Industriais e expandir nossa atuação em todo o território nacional através da melhoria contínua de nossos processos operacionais e administrativos, do respeito aos colaboradores e parceiros e responsabilidade social.</p>
            </div> 
            <br/>
            <br/>
            <div class="title"><p>VALORES</p></div>
            <br/>
            <div class="conteudo">
              <p>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Comprometimento com ações éticas e responsáveis ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Obedecemos a lei e honramos nossos compromissos ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Respeitamos a dignidade das pessoas ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Promovemos saúde ,segurança e bem estar ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Conduzimos o nosso negócio de forma confiável e transparente ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Respeitamos o meio ambiente ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Trabalhamos em equipe ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Perseguimos incansavelmente a melhoria dos nossos produtos e processos ;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Acolhemos mudanças para garantir a competitividade ;
                <br/>
             </p>
            </div> 
          </div>    
        <?php } ?> 

        <?php if ($pg == "nossos-numeros") { ?>     
          
          <div id="area-texto">             
            <div class="title"><p>Nossos Números</p></div>                   
            <br/>
            <div class="conteudo">
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <p>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">20 anos de atuação no Brasil;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Mais de 150 colaboradores;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">30 clientes entre as Regiões Norte e Nordeste do país;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">10.000 Refeições Diárias;
                <br/>
                <img src="<?php servidor(); ?>images/institucional/c.png" alt="">R$ 10 milhões de faturamento/ano;
                <br/>
             </p>             
            </div> 
          </div>  
          <div class="mapa">
            <img src="<?php servidor(); ?>images/institucional/mapa.png" alt="">
          </div>  
        <?php } ?> 

        <?php if ($pg == "clientes") { ?>     
          
          <div id="area-texto">             
            <div class="title"><p>Alguns Clientes</p></div>                   
            <br/>
            <div class="volt">
              <a href=""><img src="<?php servidor(); ?>images/institucional/bt_vot_off.png" alt="" class="botao"></a>
            </div>
             <div class="conteudo">              
              <div class="logos">                
                <ul>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/transportes-bertolini.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/esplanada.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/eurosono.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/sococo.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/ortobom.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/amafvbra.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/bandeirantes.png" alt=""></li>
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/inforp.png" alt=""></li>   
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/ponte.png" alt=""></li>               
                  <li><img src="<?php servidor(); ?>images/institucional/clientes/petribul.png" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="next">
              <a href=""><img src="<?php servidor(); ?>images/institucional/prev_off.png" alt="" class="botao"></a>
            </div>
          </div>            
        <?php } ?> 

        <?php if ($pg == "seguranca") { ?>     
          
          <div id="area-texto">             
            <div class="title"><p>Segurança</p></div>                   
            <br/>
            <div class="conteudo">
              <p>
                A área de Segurança do Trabalho é responsável por coordenar todas as atividades relacionadas a segurança, atuar como orientadora e consultora nos levantamentos das condições de trabalho, desenvolver controles para prevenir situações de risco, efetuar inspeções e auditorias de segurança e desenvolver novos equipamentos e proteções. <br/>
                A Nutriservice através de empresas especializadas, realiza o PPRA e PCMSO de suas unidades, além de técnicas de Segurança de Trabalho presente nas NR’s. <br/>
              </p>             
            </div>
            <br/>
            <br/>
            <div class="title"><p>Atividades Técnicas</p></div> 
            <br/>
            <div class="conteudo">
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">DDS (Diálogo Direto de Segurança); <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Inspeção de EPI’s (Equipamentos de Proteção Individual); <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Check-list de segurança; <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Integração de Segurança do Trabalho para novos funcionários; <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Distribuição e controle de EPI’s; <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Levantamento de dados e estatísticas de acidentes; <br/> 
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Realização e atualização dos ASO’S; <br/>
              <img src="<?php servidor(); ?>images/institucional/c.png" alt="">Exames médicos : admissionais, periódicos e demissionais. <br/> 
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

