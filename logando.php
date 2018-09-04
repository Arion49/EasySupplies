<?php	

	require 'openBD.php';

	$login_checar = $_POST['login_login'];
	$senha_checar = $_POST['senha_login'];

	if (!empty($senha_checar) && !empty($login_checar)) {

		session_start();

		$sql = mysqli_query($conexao,"
			SELECT * FROM usuarios 
			WHERE (email = '$login_checar' 
			or login = '$login_checar')
			and senha = '$senha_checar'") or die(mysqli_error());

		$row = mysqli_num_rows($sql);

		if ($row == 1) {

			$dados = mysqli_fetch_array($sql);

			$_SESSION['login'] = $dados['login'];
			$_SESSION['nome'] = $dados['nomes'];
			$_SESSION['senha'] =$dados['senha'];

			if (isset($_POST['submit'])) {
		
				include 'login_message.php';
			}

		}else{
			
			 	include 'entrar.php';

			 	echo "
			 	<script type='text/javascript'>

			 		M.toast({html: 'Usuario/email ou senha não existem', classes: 'rounded'});

			 	</script>";
		}
		
	}else{

		?>

		<script type="text/javascript">
			M.toast({html: 'Os campos não podem ficar vazios', classes: 'rounded'});
		</script>

		<?php

		exit();
	}


 ?>