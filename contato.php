<?php include("header.php") ?>
<?php include("topo.php") ?>
<?php
$guia[5]="current";
if(isset($_GET["pg"]) ){
  $pg = $_GET["pg"];
}else{ 
  $pg="rh";
}
?>
    <div id="content-contato">
      <div id="area" class="centraliza">
        <div id="slider" class="centraliza">        
          <div id="slide">
            <img src="<?php servidor(); ?>images/contato/slide.jpg" alt="">            
          </div>
        </div>
        <div id="menu-contato">
          <ul>
            <li><a href="<?php servidor(); ?>contato/pg/rh"><img src="<?php servidor(); ?>images/contato/menu/rh_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>contato/pg/pesquisa-e-satisfacao"><img src="<?php servidor(); ?>images/contato/menu/pesquisa_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>contato/pg/localizacao"><img src="<?php servidor(); ?>images/contato/menu/localizacao_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>fale-conosco"><img src="<?php servidor(); ?>images/contato/menu/fale_off.png" alt="" class="botao"></a></li>

            <li><a href="<?php servidor(); ?>trabalhe-conosco"><img src="<?php servidor(); ?>images/contato/menu/trabalho_off.png" alt="" class="botao"></a></li>
          </ul>
        </div>

        <?php if ($pg == "rh") { ?> 
          <div id="area-texto">
            <div class="titulo"><p>RH</p></div>

            <div class="conteudo">
              <p>
                <span class="sub">Missão:</span> Praticar dia a dia a Gestão de Pessoas de forma justa e clara, seguindo as normas e procedimentos de mercado; profissionalizar e capacitar as pessoas, de forma alinhada com o negócio da empresa. 
                <br/>
                <br/>
               <span class="sub">Objetivo:</span> Estimular um ambiente motivador, propiciando condições para que o nosso colaborador possa superar os desafios do dia-a-dia e, conseqüentemente, trazer resultados profissionais e pessoais a todos. 
                <br/>
                <br/>
                <br/>

                <span class="sub">PROGRAMAS DE RECURSOS HUMANOS</span>
                <br/>
                <br>
                <b>PROGRAMA OPORTUNIDADES INTERNAS (PROGRAMA INTERNO DE APROVEITAMENTO DE PESSOAL</b> 
                <br/>
                Através dele, o colaborador tem prioridade no preenchimento das vagas que surgem nas diversas áreas da empresa. 
                <br/>
                <br/>
                <br/>

                <span class="sub">TREINAMENTO E DESENVOLVIMENTO (T&D)</span>
                <br/>
                <br/>
                A área de T&D tem como missão disponibilizar Ferramentas para que os colaboradores desenvolvam competências e/ou habilidades necessárias para o desempenho de suas funções e encarreiramento dentro da organização. 
                <br/>              
                <br/>
                Assim, a Nutriservice disponibiliza treinamentos e programas de Desenvolvimento, como: 
                <br/>

                <span class="lista-1">
                  <img src="<?php servidor(); ?>images/c.png" alt="">Segurança do Trabalho <br>
                  <img src="<?php servidor(); ?>images/c.png" alt="">Qualidade <br/>                             
                  <img src="<?php servidor(); ?>images/c.png" alt="">Gastronomia <br/>     
                </span>
                <span class="lista-2">
                  <img src="<?php servidor(); ?>images/c.png" alt="">Controle de estoques <br/>
                  <img src="<?php servidor(); ?>images/c.png" alt="">Atendimento ao cliente <br/>
                  <img src="<?php servidor(); ?>images/c.png" alt="">Gestão Administrativa <br/>                 
                </span>
              </p>
            </div>
          </div>
        <?php } ?> 

        <?php if ($pg == "localizacao") { ?>
          <div id="area-texto">
            <div class="conteudo">
              <div class="titulo"><p>Localização</p></div>

              <div class="mapa-localizacao">
                <img src="<?php servidor(); ?>images/contato/mapa-recife.png" alt="">              
              </div>

              <div class="titulo-localizacao"><p>UNIDADES</p></div>
              <div class="matriz">
                <p> 
                  MATRIZ: <br/>
                  Recife, PE <br/>
                  Telefone: +55 (81) 3427-4243 <br/>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +55 (81) 9976-3678   
                </p>
                <br/>
                <br/>
                <br/>

                <p class="titulo-localizacao">FILIAIS</p>
                <br/>
                <br/>
                <p><font color="#9a9999">
                  <p><b>Manaus, AM</b></p>
                  <p>Telefone: +55 (92) 3131-3111</p>
                  </font>
                </p>
                <br/>
                <p><font color="#9a9999">
                  <p><b>Belém, PA</b></p>
                  <p>Telefone: +55 (91) 3215-5527</p>
                  <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +55 (91) 3031-2735</p>
                  </font>
                </p>
                <br/>
                <p><font color="#9a9999">
                  <p><b>Maceió, AL</b></p>
                  <p>Telefone: +55 (82) 2123-5646</p>
                  </font>
                </p>
             </div>
            </div>
          </div>
        <?php } ?>  

        <?php if ($pg == "trabalhe-conosco") { ?>
          <div id="area-texto">
            <div class="conteudo">
              <div class="titulo-trabalhe">
                <p>Trabalhe Conosco</p>
              </div>
              <br/>
              <div class="texto">
                <p>Se você busca uma empresa guiada por premissas como qualidade de 
                produtos e serviços, ética em suas relações e em constante crescimento 
                venha trabalhar conosco. Esse espaço é o nosso canal direto de comunicação.</p>
              </div>                                               
            </div> 
            <div id="formulario">   
                <form action="">
                    <label for=""><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label><br>
                    <input type="text" name="" id="nome"><br>
                                 
                    <label for=""><img src="<?php servidor(); ?>images/contato/email.png" alt=""></label><br>
                    <input type="text" name="" id="email"><br>
                                 
                    <label for=""><img src="<?php servidor(); ?>images/contato/telefone.png" alt=""></label><br>
                    <input type="text" name="" id="tel"><br>

                    <label for=""><img src="<?php servidor(); ?>images/contato/curriculum.png" alt=""></label><br>
                    <input type="file" name="" id="curri"><br>              
                                    
                    <label for=""><img src="<?php servidor(); ?>images/contato/mensagem.png" alt=""></label><br>
                    <textarea name="" id="mens" cols="30" rows="10"></textarea><br>                   
                    <input type="image" src="<?php servidor(); ?>images/contato/enviar_off.png" alt="" class="botao" id="cont_bt">                    
                </form>  
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
