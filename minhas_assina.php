 <!DOCTYPE html>
 <html lang="pt-br">

 <meta charset="utf-8">

 <title>Easy Supplies - Minhas Assinaturas</title>

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



 <body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0;overflow-x: hidden;overflow-y: visible;">

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
  opacity: 0.3" class="animated infinite pulse slower">
</span>

<?php
include_once("nav.php");
?>

<div class="width1000" style="color: white; padding-top: 5px; margin-left: 9%;"> <h5>Minhas assinaturas</h5> </div>

<div class="width1000" style="padding-top: 15px;margin-left: 9%; margin-right: 9%">

  <div class="grey" style="height: 300px; margin-bottom: 30px;">
    <div class="container-fluid">


      <div class="row">

        <table class="col s12 centered striped">

          <!-- Cabeçalho -->
          <thead>
            <tr>
              <th>Nome</th>
              <th>Quantidade</th>
              <th>Tipo</th>
              <th>Preço (unid)</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>001</td>
              <td>Notebook i7 8GB Branco</td>
              <td>Informática</td>
              <td>RS 123123</td>
              <td><i class="material-icons red-text">close</i></td>
            </tr>
            <tr>
              <td>002</td>
              <td>Caneta Esferográfica Azul</td>
              <td>Papelaria</td>
              <td>RS12323</td>
              <td><i class="material-icons red-text">close</i></td>
            </tr>
          </tbody>

        </table>
        
      </div>


    </div>

  </div>
  
</div> <!-- Fim container conteudo todo -->







<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<script type="text/javascript" src="js.js"></script>

<?php

include_once ("footer.html");

?>

</body>


</html>