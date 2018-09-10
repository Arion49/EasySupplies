<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

	<title>Easy Supplies - Logar</title>

	<!-- Compatibilidade cm IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />

	<link rel="shortcut icon" type="image/png" href="img/favicon.png">

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

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

</head>

	<span id="background-img"  style=" background-repeat: no-repeat;
	        background-position: center; background-attachment: fixed;
	        z-index: -1; position: fixed;  max-height: 1170px; height: 1170px;
	        width: 100%; opacity: 0.3" class="animated infinite pulse slower">
	        </span>

<body>

	<div class="container width100" style="padding: 10px">
		
		<div class="container width100 white z-depth-4" style="margin-top:20px;">
			
			<div class="row animated fadeIn slow" style="margin: 0">

				<a class="col s6 btn btn-large" 
				href="entrar.php" 
				style="
				background-color: white !important;
				color: black !important;
				border-radius: 0 !important;
				"> 
					<i class="material-icons left">arrow_back</i>
					Voltar

				</a>
				<a class="col s6 btn btn-large" 
				href="cad.php" 
				style="font-size: 13px;
				background-color: #4a148c !important;
				border-radius: 0 !important;
				">
					<i class="material-icons right">arrow_forward</i>
					Não tem conta? Cadastre-se gratis
				</a>
			</div>

			<div class="container">

				<div class="col s12 center-align">
				    <h4 class="animated fadeIn" style="font-family: 'Titillium Web', sans-serif; margin-top: 40px">Esqueci minha senha</h4>
				</div>

				<form style="margin-top: 55px" action="confirmando.php" accept-charset="utf-8" method="post"  autocomplete="off">

					<div class="input-field animated fadeIn" style="margin-top: 20px">
						<input id="esqueci_login" name="esqueci_login" type="text" required>
						<label for="esqueci_login">Login ou email</label>	
					</div>

					<div class="input-field animated fadeIn" style="margin-top: 30px">
						<input id="esqueci_senha" name="esqueci_senha" type="password" required>
						<label for="esqueci_senha">Nova senha</label>	
					</div>

					<div class="input-field animated fadeIn" style="margin-top: 30px">
						<input id="esqueci_conf" name="esqueci_conf" type="password" required>
						<label for="esqueci_conf">Confirmar nova senha</label>	
					</div>

					<button class="btn btn-float animated fadeIn"
					id="btn-login-esqueci" 
					type="submit" name="submit" 
					style="width: 100%;
					background-color: #4a148c;
					margin-bottom: 40px; 
					margin-top: 20px;
					">

						Trocar senha

					</button>

				</form>
			</div>
			
			
		</div>

	    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	    <script type="text/javascript" src="js.js"></script>

</body>
</html>