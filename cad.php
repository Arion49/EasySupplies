<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Cadastro</title>

	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />

	<link rel="stylesheet" type="text/css" href="css.css">

  	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="description" value="Suplimentos fáceis">

</head>
<body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0; height: 600px;">

	<?php

		include_once('nav.html');

	?>


	<div class="container" style="padding-top: 8px; padding-bottom: 8px;">
		<h5 style="color: white;">Cadastrar</h5>
	</div>



		<div class="container purple darken-3 z-depth-4"  id="scss-cad" style="margin-bottom:
		30px; height: 800px; border-radius: 10px">

			<div class="row">
				
				<div class="col m12 l6 scss-cad-width-100" id="scss-cad-a" 
				style="background-color: #270d44; border-top-left-radius: 10px; border-right: 2px solid #6f339b;">
					
					<div class="col s12" style="padding: 5px; padding-bottom: 8px; padding-top: 8px;">
						
						<div class="col s12 center-align" style="font-size: 20px;">
							
							<h5 style="color: white;">Passo 1: Dados pessoais</h5>

						</div>

						<form accept-charset="utf-8" autocomplete="on" class="col s12" method="post" name="form" id="formu-cad">							
							
							<div class="input-field col s12" style="margin-top: 28px;">
								<i class="material-icons prefix grey-text">person</i>
						      	<input id="first_name2" name="first_name2" type="text" minlength="" class="grey-text" required>
						      	<label for="first_name2">Nome completo</label>
						    </div>

						    <div class="input-field col s12">
								<i class="material-icons prefix grey-text">email</i>
						      	<input id="email" name="email" type="email" class="grey-text" required>
						      	<label for="email">Email</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">fingerprint</i>
						      	<input id="login" name="login" type="text" class="grey-text" required>
						      	<label for="login">Login</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">lock</i>
						    	<input id="senha" name="senha" type="password" class="grey-text" required>
						      	<label for="senha">Senha</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">lock</i>
						    	<input id="confSenha" name="confSenha" type="password" class="grey-text" required>
						      	<label for="confSenha">Confirmar senha</label>
						    </div>

						    
						    <button class="btn btn-float waves-effect" type="submit" name="submit" id="btn-proximo-cad">

						    	Proximo

						    </button>
						    
						</form>
					</div>

				</div>

				<div class="col m12 l6 scss-cad-width-100" id="scss-cad-b" 
				style=" background-color: #270d44; border-top-right-radius: 10px;">
					
					<div class="col s12" style="padding: 5px; padding-bottom: 8px; padding-top: 8px;">
						
						<div class="col s12 center-align" style="font-size: 20px;">
								
							<h5 style="color: lightgrey;">Passo 2: Endereço</h5>

							<form accept-charset="utf-8" autocomplete="on" class="col s12" method="post" name="form" id="formu-cad">							
							
							<div class="input-field col s12" style="margin-top: 28px;">
								<i class="material-icons prefix grey-text">search</i>
						      	<input id="cep" name="cep" type="text" maxlength="8" 
						      	pattern="\\d{5}-\\d{3}" class="grey-text" required>
						      	<label for="cep">CEP (xxxxx-xxx)</label>

						    <div class="input-field col s12">
								<i class="material-icons prefix grey-text">email</i>
						      	<input id="email" name="email" type="email" class="grey-text" required>
						      	<label for="email">Email</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">fingerprint</i>
						      	<input id="login" name="login" type="text" class="grey-text" required>
						      	<label for="login">Login</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">lock</i>
						    	<input id="senha" name="senha" type="password" class="grey-text" required>
						      	<label for="senha">Senha</label>
						    </div>

						    <div class="input-field col s12">
						    	<i class="material-icons prefix grey-text">lock</i>
						    	<input id="confSenha" name="confSenha" type="password" class="grey-text" required>
						      	<label for="confSenha">Confirmar senha</label>
						    </div>

						    
						    <button class="btn btn-float waves-effect" type="submit" name="submit" id="btn-proximo-cad">

						    	Proximo

						    </button>
						    
						</form>

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