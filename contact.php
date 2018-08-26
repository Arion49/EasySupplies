 <!DOCTYPE html>
  <html lang="pt-br">

  		<meta charset="utf-8">

  		<title>Easy Supplies</title>

    	<link rel="stylesheet" type="text/css" href="css.css">

  		<!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

      <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    	<meta name="description" value="Suplimentos fáceis">

        <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">

      <body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;">

        <?php
          include_once("nav.html");
        ?>

   
  
   



    <div class="container" style="margin-top: 5px;" id="scss-cad">

 <div class="row">
        <div class="col m6 s12"> <!-- Parte 1 -->

            <div class="col m6 s12" style="text-align: center;">
        <h5 style="color: white; font-weight: bolder;">Nossas Informações</h5>
         </div>

    <div class="col s12 z-depth-4" style="margin-bottom: 30px; height: 800px; border-radius: 10px; background-color: #f2d9e6;">
            
            <div class="row">

    <form class="col s12">
      
      <div class="row">

        <div class="col"> </div>

        <div class="input-field col s8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefi" type="text" class="validate">
          <label for="icon_prefi">Nome</label>
        </div>

       
         </div>

      <div class="row">

         <div class="col"> </div>

        <div class="input-field col s8">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephon" type="tel" class="validate">
          <label for="icon_telephon">Seu Telefone</label>
          <span class="helper-text" data-error="Telefone deve conter somente numeros" ></span>
        </div>
      </div >


      <div class="row">

        <div class = "col"> </div>

       <div class="input-field col s8">
          <i class="material-icons prefix">contact_mail</i>
          <input id="icon_mai" type="email" class="validate">
          <label for="icon_mai">Seu Email</label>
          <span class="helper-text" data-error="Email no formato errado" data-success="Email no formato certo"></span>
        </div>
      </div>

      <div class="row">

        <div class = "col"></div>

          <div class="input-field col s8">
            <i class="material-icons prefix">description</i>
            <textarea id="textare" class="materialize-textarea" data-length="120"></textarea>
            <label for="textare">Descreva a situação</label>
          </div>
        </div>




    </form>
  </div>

    </div>


          </div>  <!-- Fim PARTE 1 -->



           <div class="col m6 s12 "> <!-- Início PARTE 2 -->

            <div class="col m6 s12" style=" text-align: center;">
        <h5 style="color: white; font-weight: bolder;">Entre em contato</h5>
            </div>
       

        <div class="col s12 z-depth-4" style="margin-bottom: 30px; height: 800px; border-radius: 10px; background-color: #f2d9e6;">
            
            <div class="row">

    <form class="col s12" action="envia_fale.php" method="post" name="form">

      <div class="row">
        <div class="col"> </div>
        <div class="input-field col s8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix nome" type="text" class="validate" name="nome">
          <label for="icon_prefix">Nome</label>
        </div>     
         </div>


      <div class="row">
         <div class="col"> </div>
        <div class="input-field col s8">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone telefone" type="tel" class="validate" name="telefone">
          <label for="icon_telephone">Seu Telefone</label>
          <span class="helper-text" data-error="Telefone deve conter somente numeros" ></span>
        </div>
      </div >



      <div class="row">
        <div class = "col"> </div>
       <div class="input-field col s8">
          <i class="material-icons prefix">contact_mail</i>
          <input id="icon_mail email" type="email" class="validate" name="email">
          <label for="icon_mail">Seu Email</label>
          <span class="helper-text" data-error="Email no formato errado" data-success="Email no formato certo"></span>
        </div>
      </div>


      <div class="row">
        <div class="col"> </div>
        <div class="input-field col s8">
          <i class="material-icons prefix">subject</i>
          <input id="icon_assunto assunto" type="text" class="validate" data-length="35" name="assunto">
          <label for="icon_assunto">Assunto</label>
        </div>    
         </div>


      <div class="row">
        <div class = "col"></div>
          <div class="input-field col s8">
            <i class="material-icons prefix">description</i>
            <textarea id="textarea2 detalhes" class="materialize-textarea" data-length="120" name="detalhes"></textarea>
            <label for="textarea2">Detalhes</label>
          </div>
        </div>


        <div class="row">
        <div class = "col"></div>
          <input type="submit" name="submit" value="Enviar" class="btn center-align col s8 offset-s1">
          </div>

      </form>
        </div>




  
  </div>

    </div>

        </div> <!-- Fim PARTE 2-->
            </div>
             </div>


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

        <script type="text/javascript" src="js.js"></script>

      <?php

        include_once ("footer.html");

      ?>

    </body>

    
  </html>