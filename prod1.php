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


		<div class="container" style="padding-top: 8px; padding-bottom: 8px; background-color: white; margin-top: 15px; margin-bottom: 15px; border-radius: 5px;">
         <div class="row">
         	
         	<div class=" col s12 m1 l1 "></div>
 
			<div class="col s12 m10 l4 ">
				<div class="carousel carousel-slider  responsive" style="border-radius: 92px; margin-top: 25px;">
                 <a class="carousel-item"><img src="img/cx1.jpg" style=" width: 100%;height: 285px;"></a>
                   <a class="carousel-item"><img src="img/cx1.jpg" style="width: 100%;height: 285px;"></a>
                   <a class="carousel-item"><img src="img/cx1.jpg" style="width: 100%;height: 285px;"></a>
                   <a class="carousel-item"><img src="img/cx1.jpg" style="width: 100%;height: 285px;"></a>
                   <a class="carousel-item"><img src="img/cx1.jpg" style="width: 100%;height: 285px;"></a>
                </div>
			</div>
		<div class=" col s12 m2 l1 "></div>
			<div class=" col s12 m8 l5 ">
			<h4><b>Kit Frutas e legumes Basico</b></h4>
			<h3> R$65,00</h3>
            <p>&nbsp;&nbsp;O kit 'frutas e legumes basico' foi pensado para pessoas que moram sozinhas facilitando
          a organização e evitando desperdicios. Nesse kit contem 10 tipos de legumes 10 tipos de frutas e 2 tipos de hortaliça.</p>

           <hr>
         <form action="comprar.php">
           <legend>Forma de Pagamento:	
           <span>
           <label>
           <input name="group1" type="radio" checked />
           <span>Boleto</span>
           </label>&nbsp;
           
           <label>
           <input name="group1" type="radio" />
           <span>Cartao</span>
           </label>
            </span>
           </legend>
        
        <input type="number" min="1" max="3" placeholder="Quantidade de Kit's">
        <select class="browser-default">
                 <option value="" disabled selected>Modo de Entrega</option>
                 <option value="1">Mensal</option>
                 <option value="2">Quinzinal</option>
                 </select>
                 <br>
                 <hr>
          
          
         
          

            <button class="waves-effect purple darken-4 btn" style="border-color: black 1px;" id="comprar">Comprar</button>
        </form>    
         
		    </div>
            <div class=" col s12 m2 l1 "></div>
		  </div> 
		  </div> 
<!--  //////////////////////////////////////////////////////////////////// !-->        
          

        
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

        <script type="text/javascript" src="js.js"></script>

      <?php

        include_once ("footer.html");

      ?>
	</body>
</html>