

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

$sql = mysql_query("INSERT INTO usuarios(nomes, email, login, senha, estado, cidade, bairro, rua, ncasa) 
	VALUES ('$nome', '$email', '$login', '$senha', '$estado', '$cidade', '$bairro', '$rua', '$ncasa')");
	
	if (isset($_POST['submit'])) {
		
		include 'cad_message.php';

	}
?>