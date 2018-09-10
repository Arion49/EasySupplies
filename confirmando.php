<?php	

	require 'openBD.php';

	$login_checar = $_POST['esqueci_login'];
	$senha_checar = $_POST['esqueci_senha'];
	$conf_checar = $_POST['esqueci_conf'];

	if (!empty($senha_checar) && !empty($login_checar) && !empty($conf_checar)) {

		if ($senha_checar == $conf_checar) {

			session_start();

			$sql = mysqli_query($conexao,"
				SELECT * FROM usuarios 
				WHERE email = '$login_checar' 
				or login = '$login_checar'") or die(mysqli_error());

			
			$row = mysqli_num_rows($sql);

			if ($row == 1) {

				$dados = mysqli_fetch_array($sql);

				mysqli_query ($conexao, "
					UPDATE usuarios SET senha = '$senha_checar' 
					WHERE (email = '$login_checar' or login = '$login_checar')");
				
				$_SESSION['senha'] = $dados['senha'];
				$_SESSION['login'] = $dados['login'];
				$_SESSION['nome'] = $dados['nomes'];
				$_SESSION['email'] = $dados['email'];
				$_SESSION['estado'] = $dados['estado'];
				$_SESSION['cidade'] = $dados['cidade'];
				$_SESSION['bairro'] = $dados['bairro'];
				$_SESSION['rua'] = $dados['rua'];
				$_SESSION['ncasa'] = $dados['ncasa'];
				$_SESSION['id'] = $dados['id'];


				if (isset($_POST['submit'])) {
			
					include 'confirmar_message.php';
				}

			}else{
				
				 	include 'reSenha.php';

				 	echo "
				 	<script type='text/javascript'>

				 		M.toast({html: 'Usuario/email não existem', classes: 'rounded'});

				 	</script>";
			}

			
		}else{

			include 'reSenha.php';

			?>

			<script type="text/javascript">
				M.toast({html: 'As senhas não estão iguais', classes: 'rounded'});
			</script>

			<?php

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