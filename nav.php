<link href="https://fonts.googleapis.com/css?family=Poppins|Slabo+27px" rel="stylesheet">

<style>
  .back_extend {
    background: #3b1659 !important;

  }
  	.bottom_t:hover {
    	border-bottom: 2px solid #fff !important;
  	}

  	.back_navbar {
    	height: 13px;
  	}

  	.header_back{
    	height: 250px;

    	width: 100%;
    	background:  url('img/back_int.png');
  	}

    .header_back img{
    	padding-top: 35px;
  	}

  	

</style>

	<link rel="shortcut icon" type="image/png" href="img/favicon.png">

	<div class="header header_back center-align hide-on-med-and-down">

		<img class="responsive-image" src="img/logo_supplies.png">

	</div>

	<?php 
		require 'openBD.php';

		session_start();
	?>

  	<nav class="nav-extended back_extend back_navbar" style="z-index: 100">


	    <div class="nav-wrapper ">

	    	<div class="brand-logo responsive-image hide-on-med-and-down ola scale-transition scale-out"
		  	style="z-index: 100; margin-left: 45.5%">  

		  	 	<a href="" class="ola">

		  	 		<img style="height: 80px; width: 80px;" src="img/logo_caixa2.png">

		  	 	</a>  			
		  		
		  	</div>

		    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

		    <ul id="nav-mobile" class=" transparent hide-on-med-and-down">

		    	<li> <a class="bottom_t" href="index.php">Home</a>
		        </li>
		        <li>
		          <a  class="bottom_t" href="assina.php">Assinaturas</a>
		        </li>
		        <li>
		          <a class="bottom_t" href="colab.php">Colaboradores</a>
		        </li>
		        <li >
		          <a  class="bottom_t" href="contact.php">Contato</a>
		        </li>
		        <li>
		          <a class="bottom_t" href="about.php">Sobre nós</a>
		        </li>

				<?php

				if (isset($_SESSION["login"]) || isset($_SESSION["senha"])) {

				?>

					
						

					<ul class="right" style=" padding-left: 20px;">

						<li 
						style="font-family: 'Poppins', sans-serif; font-size: 11pt;
						background-color: #381159; 
						padding-right: 10px;
						">
							<?php

						 		$input = $_SESSION['nome'];
						 		list($input) = explode(' ',$input,2);
						 		echo "Olá, ".$input; 

						 	?>						 			
						</li>

				    	<li><a href="#!">Minhas assinaturas</a></li>
				    	<li><a href="editar_perfil.php">Editar perfil</a></li>
				    	<li><a href="logout.php" >Sair</a></li>
				    	
				    </ul>

				<?php
				}else{
				?>
					<ul class="hide-on-med-and-down right">
			    	
				    	<li>
				    		<a class="bottom_t" href="entrar.php">Entrar</a>
				    	</li>

				    	<li>
				    		<a class="bottom_t" href="cad.php">Cadastrar</a>
				    	</li>

				    </ul>


				<?php
				}

				?>

			</ul>		    

			<a id="logo_logo" class="brand-logo hide-on-large-only">
				<img style="height: 60px; width: 220px;" src="img/logo_supplies.png">
			</a> 

	    </div>

  	</nav>
  
  <!-- Sidenav mobile -->
	  <ul class="sidenav" id="mobile-demo">

	  	<li class="sidenav-close">
	  		<a href="" class="deep-purple waves-effect light-waves" style="color: white;">
	  			<i class="material-icons">arrow_back</i>Fechar
	  		</a>
	  	</li>

	    <li> 
	    	<a class="waves-effect" href="index.php">Home <i class="material-icons">home</i></a>
		</li>

		<li>
			<a class="waves-effect" href="assina.php">Assinaturas <i class="material-icons">apps</i></a>
		</li>

		<li>
			<a class="waves-effect" href="colab.php">Colaboradores <i class="material-icons">group</i></a>
		</li>

		<li>
			<a class="waves-effect" href="contact.php">Contato <i class="material-icons">email</i></a>
		</li>

		<li>
			<a class="waves-effect" href="about.php">Sobre nós <i class="material-icons">info</i></a>
		</li>

		<?php

				if (isset($_SESSION["login"]) || isset($_SESSION["senha"])) {
				?>

				

					<div class=" deep-purple white-text">
						<div style="font-size: 20px; margin-left: 20px;padding-top: 10px; padding-bottom: 10px">
							 <?php echo "Olá, ".$input;?>
						</div>
			    	
				    	<li class="waves-effect" style="width: 100%">
				    		<a class="bottom_t white-text" href="#!">
				    			Minhas assinaturas
				    			<i class="material-icons white-text">format_list_bulleted</i>
				    		</a>
				    	</li>

				    	<li class="waves-effect" style="width: 100%">
				    		<a class="bottom_t white-text" href="editar_perfil.php">
				    			Editar perfil
				    			<i class="material-icons white-text">edit</i>
				    		</a>
				    	</li>

				    	<li class="waves-effect" style="width: 100%">
				    		<a class="white-text" href="logout.php" style="margin-top: 10px">
				    			Sair
				    			<i class="material-icons white-text" style="font-weight: bold"> clear</i>
				    		</a>
				    	</li>
				    </div>	

				<?php
				}else{
				?>
					<ul>

						<li class="divider"></li>
			    	
				    	<li>
							<a class="waves-effect sidenav-trigger" href="entrar.php">
								Entrar 
								<i class="material-icons">input</i>
							</a>
						</li>

						<li>
							<a class="waves-effect sidenav-trigger" href="cad.php">
								Cadastrar 
								<i class="material-icons">add_circle</i>
							</a>
						</li>

				    </ul>


				<?php
				}

				?>

		

	  </ul>