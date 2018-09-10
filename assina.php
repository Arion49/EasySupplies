<?php
require_once('openBD.php');

  
  $consulta_produtos = mysqli_query($conexao, "SELECT * FROM assinaturas ");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Easy Supplies - Assinaturas</title>

  <link rel="stylesheet" type="text/css" href="css.css">

  <link rel="stylesheet" href="animate/animate.css">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Icone do titulo -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">

  <meta name="description" value="Suprimentos fáceis, trazendo o melhor dos produtos orgânicos da forma mais fácil para você!">

  <!-- Import hover.css -->
  <link rel="stylesheet" type="text/css" href="hover/css/hover.css">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<span id="background-img" 
style="
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
z-index: -1;
position: fixed; 
max-height: 1170px;
height: 1170px;
width: 100%;
opacity: 0.4" class="animated infinite pulse slower">
</span>  


<body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;">

  <?php
  include_once('nav.php');
  ?>

  <div class="container-fluid" style="padding-top: 8px; padding-bottom: 8px;margin-left: 9%; margin-right: 9%">

    <div style="color: white; margin-left: 10px"><h5>Assinaturas</h5></div>

    <div class="row" style="padding-top: 5px">
    <?php
      while($ass = $consulta_produtos->fetch_assoc())
      {
    ?>
      <div class="col s12 m6 l4">

        <div class="card">

          <div class="card-image z-depth-2  responsive">
            <img src="<?php echo $ass['url']; ?>">
          </div>

          <div>  
            <span class="card-title" style="color: black; font-family: timesnewroman;" >
              <b><?php echo $ass['nome_produto']; ?></b>
            </span>
          </div>

          <div class="card-content" style="border-left: 3px solid purple;">
            <div class="col s6">
              <b style="font-size: 18px; color: green;"> RS <?php echo $ass['preco'] ?></b>
            </div>
            <div class="col s6"></div>
            <div class="col s12">
               <p><?php echo $ass['descricao_produto']; ?></p>
            </div>
            
          </div>

          <a href="prod.php?produto_pesquisa=<?php echo $ass['id']; ?>">
            <div style="color: purple; font-size: 18px; width: 100%" class="card-action hvr-bounce-to-top">

              Mais Informações ->

            </div>
          </a>

        </div>

      </div>

    <?php } ?>


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