

<?php

require 'openBD.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$estado = $_POST['estados'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$ncasa = $_POST['ncasa'];

$checar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE (login = $login) or (email = $email)");

	echo "checar".$checar;

$row = mysqli_num_rows($checar);

if ( $row > 0) {
	
	include 'cad.php';

	echo "
	<script type='text/javascript'>

		M.toast({html: 'Email ou login já cadastrados', classes: 'rounded'});

	</script>";

	exit();

}

else{

$sql = mysqli_query($conexao,"INSERT INTO usuarios(nomes, email, login, senha, estado, cidade, bairro, rua, ncasa) 
	VALUES ('$nome', '$email', '$login', '$senha', '$estado', '$cidade', '$bairro', '$rua', '$ncasa')");
	
	if (isset($_POST['submit'])) {
		
		include 'cad_message.php';

	}
}	
?>