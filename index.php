 <!DOCTYPE html>
 <html lang="pt-br">

 <head>

     <meta charset="utf-8">

     <title>Easy Supplies</title>

     <link rel="stylesheet" type="text/css" href="css.css">

     <link rel="stylesheet" href="animate/animate.css">

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

     <!-- Icone do titulo -->
     <link rel="shortcut icon" type="image/png" href="img/favicon.png">

     <meta name="description" value="Suprimentos fáceis, trazendo o melhor dos produtos orgânicos da forma mais fácil para você!">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

     <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css?family=Poppins|Slabo+27px" rel="stylesheet">
   
 </head>

 <span 
style="
background-image: url(img/back-index.png);
background-repeat: repeat;
background-attachment: fixed;
z-index: -1;
position: fixed; 
max-height: 1170px;
height: 1170px;
width: 100%;
opacity: 0.2">
</span> 

 <body style="background-color: rgb(255,255,255); margin: 0;padding: 0;">

  <div class="container-fluid" style="margin-bottom: 0;">

    

    <?php
      include_once 'nav.php'; 
    ?>

    <div class="row" style="margin-top:2px;margin-bottom: 0">

      <div class="col s12 responsivea-img" style="
      background-image: url('img/back_index-p1.png'); 
      height: 510px;
      padding-top: 30px;
      background-size: 100% 510px;
      ">

        <div class="col m6 s12 center-align animated fadeInLeft slow" 
        style="
        font-family: 'Poppins', sans-serif; font-size: 25px;
        color: white;
        ">

          Torne sua vida mais fácil e saudável conosco.

          <div class="col s12 center-align"> 
            <img src="img/red.png" style="height: 150px; margin-top: 40px; opacity: 0.5">
          </div>

        </div>

        <div class="col m6 s12 center-align animated fadeInRight delay-1s hide-on-small-only"
        style="
        font-family: 'Poppins', sans-serif; font-size: 25px;
        color: white;
        " 
        >

          <div class="col s12 center-align"> 

            <img src="img/download.png" style="height: 150px; margin-top: 20px;margin-bottom: 40px; opacity: 0.8" />
          </div>

          Tire sua vida de perigos como os agrotóxicos.

        </div>

        <div class="col s12 center-align animated fadeIn slow delay-2s" style="margin-top: 4%">

          <button class="btn btn-large btn-flat white-text butn_saiba" style="
          font-size: 18px;
          ">
            <a href="#como" id="buton_saiba" style="color: white !important;">Saiba como</a>
            <i class="material-icons right">expand_more</i>
          </button>

        </div>

      </div>

      <div id="como" class="col s12 center-align" style="padding-top: 150px;">

        <h3 style=" font-family: 'Poppins', sans-serif;">  
          <a style=" color: #4a148c !important;">Como funciona? </a>
        </h3>
      </div>

      <div class="col s12 alo" style="
      padding-top: 30px;
      background-image: url('img/1.png');
      background-repeat: no-repeat;
      background-position: top;
      background-size: 100%;
      height: 610px;
      padding-bottom: 330px;
      ">

        <div class="container">

          <div class="col l5 m6 s12" 
          style="font-size: 25px;
          font-family: 'Indie Flower', cursive;
          ">

            <p class="animar_home animated fast delay-1s" style="padding: 0; margin: 0;font-family: 'Indie Flower', cursive;">
              1. Fazemos uma <a class="purple-text" style="font-weight: bold">parceria</a> com pequenos produtores e conseguimos o melhor que eles têm a oferecer.
            </p>  

          </div>

          <div class="col l5 offset-l2 m6 s12" 
          style="font-size: 23px;
          font-family: 'Indie Flower', cursive;
          ">

            <p class="animar_home b animated fast delay-1s" style="padding: 0; margin: 0">
              2. Trazemos para você, <a class="purple-text" style="font-weight: bold">na sua casa</a>, os produtos em forma de assinaturas mensais ou quinzenais.
            </p> 

          </div>

        </div> 

      </div>

      <div class=" col s12" style="
      background-color: #fdd835;
      ">
        
        <div class="col s12 center-align">
          <h3 style="font-family: 'Poppins', sans-serif;">Gostou?</h3>
        </div>

        <div class="container" style="padding-bottom: 20px">
          
          <div class="col l7 m12" style="margin-top: 10px">
          
            <p style="
            font-size: 30px; 
            font-family: 'Indie Flower', cursive;
            text-indent: 1cm">

              Oferecemos grandes diversidades de assinaturas, contendo tamanhos diferentes e um especial
              <a style="font-size: 34px; font-weight: bold; color: black !important">
                :
              </a>
              <a class="purple-text">todo mês você recebe conteúdos diferentes</a>.
            </p>

          </div>

          <div class="col l5 m12 center-align">
            
            <div class="col s12">
              
              <img src="img/frutas-branco.png" style="width: 50%">

            </div>

            <div class="col s12">
              
              <a href="assina.php" class="btn-large butn-confira-index"
              style="
              color: black !important; 
              font-size: 20px;
              width: 70%; 
              margin-top: 10px; 
              margin-bottom: 30px;
              background-color: transparent;
              border: 1px solid black;
              ">
                  
                  Confira

             </a>

            </div>
          </div>

        </div>

      </div>

      <div class=" col s12 blue lighten-2">
        
        <div class="col s12 center-align">
          <h3 style="font-family: 'Poppins', sans-serif; margin-top: 40px">Não entendeu? Tem alguma reclamação?</h3>
        </div>

        <div class="container" style="padding-bottom: 20px">

          <div class="col l5 m12 center-align">
            
            <div class="col s12">
              
              <img src="img/cantact-img.png" style="width: 50%">

            </div>

            <div class="col s12">
              
             <a href="contact.php" class="btn-large butn-contact-index"
              style="
              color: black !important;
              width: 70%; 
              margin-top: 10px; 
              margin-bottom: 30px;
              background-color: transparent;
              border: 1px solid black;
              ">
                  
                  Entre em contato

             </a>

            </div>
          </div>
          
          <div class="col l7 m12" style="margin-top: 10px">
          
            <p style="
            font-size: 35px; 
            font-family: 'Indie Flower', cursive;
            text-indent: 1cm">

              Entre em contato conosco para tirar suas dúvidas, é rapido e 
              <a class="purple-text">super fácil</a>.
            </p>

          </div>

        </div>

      </div>

    </div>
  </div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript" src="js.js"></script>

<script type="text/javascript" src="novo.js"></script>

<?php

include_once ("footer.html");

?>

</body>


</html>