

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

$query_select_login = "SELECT login FROM usuarios WHERE login = '$login'";
$query_select_email = "SELECT email FROM usuarios WHERE email = '$email'";

$select_login = mysqli_query($conexao,$query_select_login);
$array_login = mysqli_fetch_array($select_login);
$logarray = $array_login['login'];

$select_email = mysqli_query($conexao,$query_select_email);
$array_email = mysqli_fetch_array($select_email);
$emailarray = $array_email['email'];



if ($logarray == $login || $emailarray == $email) {
	
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