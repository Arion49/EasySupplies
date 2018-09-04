

<?php

require 'openBD.php';

$checar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login = '$_POST['login']' or email = '$_POST['email']'");

$exis = mysql_num_rows($checar);

if ($exis != 1) {
	
	include 'cad.php';

	echo "
	<script type='text/javascript'>

		M.toast({html: 'Email ou login já cadastrados', classes: 'rounded'});

	</script>";

}else{



$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$estado = $_POST['estados'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$ncasa = $_POST['ncasa'];

$sql = mysqli_query($conexao,"INSERT INTO usuarios(nomes, email, login, senha, estado, cidade, bairro, rua, ncasa) 
	VALUES ('$nome', '$email', '$login', '$senha', '$estado', '$cidade', '$bairro', '$rua', '$ncasa')");
	
	if (isset($_POST['submit'])) {
		
		include 'cad_message.php';

	}
}	
?>