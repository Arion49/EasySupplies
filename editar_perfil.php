<!DOCTYPE html>
<html lang="pt-br">
	<head>

	<!-- eduardo melo -->
		<meta charset="utf-8">

		<title>Easy Supplies - Editar Perfil</title>

		<!-- Icone do titulo -->
		<link rel="shortcut icon" type="image/png" href="img/favicon.png">

		<!-- Compatibilidade cm IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />

		<link rel="stylesheet" href="animate/animate.css">


		<link rel="stylesheet" type="text/css" href="css.css">

	  	<!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

	    <!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

	    <!-- Responsividade -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	    <meta name="description" value="Suprimentos fáceis, trazendo o melhor dos produtos orgânicos da forma mais fácil para você!">

	</head>

	        <span id="background-img"  style=" background-repeat: no-repeat;
	        background-position: center; background-attachment: fixed;
	        z-index: -1; position: fixed;  max-height: 1170px; height: 1170px;
	        width: 100%; opacity: 0.3" class="animated infinite pulse slower">
	        </span>

	<body style="background-color: rgba(75,0,130,0.8); margin: 0;padding: 0; height: 600px;">

		<?php

			include_once('nav.php');
			

		?>




		<div class="container" style="padding-top: 8px; padding-bottom: 8px;">
			<h5 style="color: white;">Editar Perfil</h5>
		</div>



			<div  class="container z-depth-4"  id="scss-cad"  style="margin-
			bottom:30px; border-radius: 10px; border-bottom-right-radius: 0;
			border-bottom-left-radius: 0; background-color: #270d44; ">

				<div class="row">

					<form  accept-charset="utf-8"  autocomplete="on"
					class="col s12"  method="post"  name="form"
					action="alterar.php"  id="formu-cad-alterar"
					style="padding: 0;">
				
						<div class="col m12 l6 min-phone animated fadeIn fast" 
						style=" background-color: #270d44; border-top-left-
						radius: 10px; border-right: 2px solid #6f339b; ">
							
							<div class="col s12" style="padding: 5px; padding-bottom: 8px; padding-top: 8px;">
								
								<div class="col s12 center-align" style="font-size: 20px;">
									
									<h5 style="color: white;">Dados pessoais</h5>

								</div>					
										
								<div class="input-field col s12" style="margin-top: 28px;">
									<i class="material-icons prefix grey-text">person</i>
								   	<input id="nome" name="nome" type="text" minlength="" class="grey-text" value="<?php echo $_SESSION['nome']; ?>" required>
								    <label for="nome"> Nome </label>
								</div>

								<div class="input-field col s12">
									<i class="material-icons prefix grey-text">email</i>
								    <input id="email" name="email" type="email" class="grey-text" value="<?php echo $_SESSION['email']; ?>" required >
								    <label for="email">Email</label>
								</div>

								<div class="input-field col s12">
								   	<i class="material-icons prefix grey-text">fingerprint</i>
								   	<input id="login" name="login" type="text" class="grey-text" value="<?php echo $_SESSION['login']; ?>" required>
								   	<label for="login">Login</label>
								</div>

								<div class="input-field col s12">
								   	<i class="material-icons prefix grey-text">lock</i>
								   	<input id="senha" name="senha" type="password" class="grey-text" value="<?php echo $_SESSION['senha']; ?>" required> 
								  	<label for="senha">Senha</label>
								</div>

								<p id="mensagem_error" style="display:none; color: white;"></p>

								<div class="input-field col s12">
								   	<i class="material-icons prefix grey-text">lock</i>
								   	<input id="confSenha" name="confSenha" type="password" class="grey-text" >
								   	<label for="confSenha">Confirmar senha</label>
								</div>
								    
								<div class="btn btn-float waves-effect" id="btn-proximo-cad" style="background-color: #304ffe;width: 100%;margin-top: 40px;margin-bottom: 20px;">
								   	Verificar
							    </div>
							    
							</div>
						</div>


						<div class="col m12 l6"
						style=" background-color: #270d44; border-top-right-radius: 10px;">
							
							<div class="col s12" style="padding: 5px; padding-bottom: 8px; padding-top: 8px;">
								
								<div class="col s12 center-align animated" 
								style="
								font-size: 20px;
								
								">

									<h5 style="color: white;">Endereço</h5>


										<div class="input-field col s12" style="margin-top: 28px;">
											<i class="material-icons prefix grey-text">map</i>
											<input type="text" name="estados" id="estados" style="text-transform: uppercase;" maxlength="2" class="grey-text" value="<?php echo $_SESSION['estado'];?>" required>
											<label for="estados">Estado (MG)</label>
										</div>

										<div class="input-field col s12">
											<i class="material-icons prefix grey-text">domain</i>
										  	<input id="cidade" name="cidade" type="text" class="grey-text" value="<?php echo $_SESSION['cidade']; ?>" required>
										   	<label for="cidade">Cidade</label>
										</div>

										<div class="input-field col s12">
										  	<i class="material-icons prefix grey-text">place</i>
										   	<input id="bairro" name="bairro" type="text" class="grey-text" value="<?php echo $_SESSION['bairro']; ?>" required>
										   	<label for="bairro">Bairro</label>
										</div>

										<div class="input-field col s12">
										  	<i class="material-icons prefix grey-text show-on-large">trending_up</i>
										  	<input id="rua" name="rua" type="text" class="grey-text" value="<?php echo $_SESSION['rua']; ?>" required>
										   	<label for="rua">Rua</label>
										</div>

										<div class="input-field col s12">
										  	<i class="material-icons prefix  grey-text show-on-large">filter_none</i>
										   	<input id="ncasa" name="ncasa" type="number" class="grey-text" value="<?php echo $_SESSION['ncasa']; ?>" required>
										   	<label for="ncasa">Nº da casa</label>
										</div>
										    
										<button class="btn btn-float waves-effect cad_btn_cad" type="submit" name="submit" disabled="disabled" id="btn-att" >
										   	Atualizar Dados
									    </button>
								</div>

							</div>
							
						</div>

					</form>

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