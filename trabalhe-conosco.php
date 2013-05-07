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
          <?php include("contato_msg.php") ?>         

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
