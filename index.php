 <!DOCTYPE html>
 <html lang="pt-br">

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

 <link href="https://fonts.googleapis.com/css?family=Poppins|Slabo+27px" rel="stylesheet">

 <body style="background-color: white; margin: 0;padding: 0;">

  <!-- Exemplificar -->
  <div class="container-fluid" style="background-color: white;">

    <span id="background-img" 
        style="
        display: none;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        z-index: -1;
        position: fixed; 
        max-height: 1170px;
        height: 1170px;
        width: 100%;
        opacity: 0.3" class="animated infinite pulse slower">
    </span>

    <?php
      include_once 'nav.php'; 
    ?>

    <div class="row" style="margin-top:2px">

      <div class="col s12 responsivea-img" style="
      background-image: url('img/back_index-p1.png'); 
      height: 610px;
      padding-top: 30px;
      background-size: 100% 610px;
      ">

        <div class="col m6 s12 center-align animated fadeIn slow delay-1s" 
        style="
        font-family: 'Poppins', sans-serif; font-size: 25px;
        color: white;
        ">

          Torne sua vida mais fácil e saudável conosco.

          <div class="col s12 center-align"> 
            <img src="img/red.png" style="height: 150px; margin-top: 40px; opacity: 0.5">
          </div>

        </div>

        <div class="col m6 s12 center-align animated fadeIn delay-3s hide-on-small-only"
        style="
        font-family: 'Poppins', sans-serif; font-size: 25px;
        color: white;
        " 
        >

          <div class="col s12 center-align"> 
            <img src="img/download.png" style="height: 150px; margin-top: 20px;margin-bottom: 40px; opacity: 0.7">
          </div>

          Livre sua vida perigos como agrotóxicos.

        </div>

        <div class="col s12 center-align" style="margin-top: 5%">

          <button class="btn btn-large btn-flat white-text butn_saiba" style="
          font-size: 18px;
          ">
            Saiba como 
            <i class="material-icons right">expand_more</i>

          </button>

        </div>

      </div>

      <div class="col s12 center-align purple-text">
        <h3> Saiba como funciona </h3>
      </div>

      <div class="col s12" style="
      padding-top: 70px;
      margin-top: 100px;
      background-image: url('img/1.png');
      background-repeat: no-repeat;
      background-position: top;
      background-size: 100%;
      height: 500px;
      ">

        <div class="container">

          <div class="col s3" style="font-size: 23px">
            Conseguimos o melhor dos menores produtores
          </div>

          <div class="col s4 offset-s5">
            aaa
          </div>

        </div> 

      </div>

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