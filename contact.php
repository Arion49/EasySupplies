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

        <link href="https://fonts.googleapis.com/css?family=Poppins|Slabo+27px" rel="stylesheet">

      <body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;">

        <?php
          include_once("nav.html");
        ?>

   
  
   



    <div class="container" style="margin-top: 5px;" id="scss-cad">

 <div class="row">
        <div class="col m6 s12"> <!-- Parte 1 -->

<<<<<<< HEAD
<<<<<<< HEAD
            <div class="col m12 s12" style="text-align: center;">
=======
            <div class="col s12" style="text-align: center;">
>>>>>>> b6f4a0ba156eff6cba940f34b7ca7576f2a2bbd0
=======
            <div class="col m6 s12" style="text-align: center;">
>>>>>>> parent of 741cbfb... About and Footer
        <h5 style="color: white; font-weight: bolder; text-shadow: black 0.1em 0.1em 0.2em;">Nossas Informações</h5>
         </div>

    <div class="col s12 z-depth-4" style="margin-bottom: 30px; height: 800px; border-radius: 10px; background-color: #eaccdb;">
            
            <div class="row">

    <form class="col s12">
      <div class="row">

        <div class="col"> </div>

        <div class="input-field col s11">
          <h5 style="font-weight: bolder; font-family: 'Poppins', sans-serif; text-shadow: #ff6699 0.1em 0.1em 0.4em;"> Endereço </h5>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt; ">Av. Amazonas, 55 - Centro, Betim - MG, 32600-075</p>
          <div id="map">
            <iframe class="col s11" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.0292909994123!2d-44.195723485084834!3d-19.965270386583924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6eaa73c6d609f%3A0xd61a7f12deb82d4a!2sSESI+SENAI+Betim+CETEM+Maria+Madalena+Nogueira!5e0!3m2!1spt-BR!2sbr!4v1535304425814" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
        </div>

       
         </div>

         

      <div class="row">

         <div class="col"> </div>

        <div class="input-field col s11">
          <h5 style="font-weight: bolder;font-family: 'Poppins', sans-serif; text-shadow: #ff6699 0.1em 0.1em 0.4em;"> Telefones para Contato </h5>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31)98730-3500</p>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31)97109-4797</p>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31)99181-4597</p>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">(31)99601-7384</p>
        </div>
      </div >


      <div class="row">

        <div class = "col"> </div>

       <div class="input-field col s11">
          <h5 style="font-weight: bolder;font-family: 'Poppins', sans-serif; text-shadow: #ff6699 0.1em 0.1em 0.4em;"> Email </h5>
          <p style="font-family: 'Slabo 27px', serif; font-size: 13pt;">easysuppliestcc@gmail.com</p>
        </div>
      </div>

      




    </form>
  </div>

    </div>


          </div>  <!-- Fim PARTE 1 -->



           <div class="col m6 s12 "> <!-- Início PARTE 2 -->

            <div class="col m6 s12" style=" text-align: center;">
        <h5 style="color: white; font-weight: bolder; text-shadow: black 0.1em 0.1em 0.2em;">Entre em contato</h5>
            </div>
       

        <div class="col s12 z-depth-4" style="margin-bottom: 30px; height: 800px; border-radius: 10px; background-color: #f2d9e6;">
            
            <div class="row">

    <form class="col s12" action="envia_fale.php" method="post" name="form">

      <div class="row">
        <div class="col"> </div>
        <div class="input-field col s10">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" required="required" type="text" class="validate" name="nome" pattern="[a-z\s]+$">
          <label for="icon_prefix">Nome</label>
          <span class="helper-text" data-error="O nome está em formato incorreto" ></span>
        </div>     
         </div>


      <div class="row">
         <div class="col"> </div>
        <div class="input-field col s10">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" required="required" type="text" placeholder="(99)99999-9999" class="validate" name="telefone"     maxlength="14" pattern="(\([0-9]{2}\))([9]{1})?([0-9]{4})-([0-9]{4})">
          <label for="icon_telephone">Seu Telefone</label>
          <span class="helper-text" data-error="Telefone deve estar no formato correto" ></span>
        </div>
      </div >



      <div class="row">
        <div class = "col"> </div>
       <div class="input-field col s10">
          <i class="material-icons prefix">contact_mail</i>
          <input id="icon_mail" required="required" type="email" class="validate" name="email">
          <label for="icon_mail">Seu Email</label>
          <span class="helper-text" data-error="Email no formato incorreto" data-success="Email no formato certo"></span>
        </div>
      </div>


      <div class="row">
        <div class="col"> </div>
        <div class="input-field col s10">
          <i class="material-icons prefix">subject</i>
          <input id="icon_assunto" required="required" type="text" class="validate" data-length="45" maxlength="45" name="assunto">
          <label for="icon_assunto">Assunto</label>
        </div>    
         </div>


      <div class="row">
        <div class = "col"></div>
          <div class="input-field col s10">
            <i class="material-icons prefix">description</i>
            <textarea id="textarea2" required="required" class="materialize-textarea" data-length="310" maxlength="310" name="detalhes"></textarea>
            <label for="textarea2">Detalhes</label>
          </div>
        </div>


        <div class="row">
        <div class = "col"></div>
          <button class="btn center-align col s8 offset-s1 waves-effect waves-light" type="submit" name="submit" >
            Enviar
          </button>
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