
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

					<a 
					class="bottom_t dropdown-trigger hide-on-med-and-down right" 
					href="#!" 
					data-target='dropdown-usuario' style="padding-left: 25px">

						<?php echo $_SESSION["nome"]; ?>
						<i class="material-icons right" style="margin-right: 5px; color: white">arrow_drop_down</i>	
					</a>

					<ul id="dropdown-usuario" style="width: 80px" class="dropdown-content">
			    	
				    	<li><a href="#!">Minhas assinaturas</a></li>
				    	<li><a href="#!">Editar perfil</a></li>
				    	<li class="divider" tabindex="-1"></li>
				    	<li><a href="logout.php">Sair</a></li>

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
			<a class="waves-effect" href="contact.php">Contato <i class="material-icons">mode_edit</i></a>
		</li>

		<li>
			<a class="waves-effect" href="about.php">Sobre nós <i class="material-icons">info</i></a>
		</li>

		<li class="divider grey darken-1"></li>

		<?php

				if (isset($_SESSION["login"]) || isset($_SESSION["senha"])) {
				?>

					<div class=" deep-purple white-text">
						<span style="font-size: 20px; margin-left: 20px">
							Ola <?php echo $_SESSION["nome"];?>, o que deseja?
						</span>
			    	
				    	<li><a class="bottom_t white-text" href="#!">Minhas assinaturas</a></li>
				    	<li><a class="bottom_t white-text" href="#!">Editar perfil</a></li>
				    	<li><a class=" white-text" href="logout.php" style="margin-top: 10px">Sair</a></li>
				    </div>	

				<?php
				}else{
				?>
					<ul class="hide-on-med-and-down right">
			    	
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