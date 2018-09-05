

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


$sql = mysqli_query($conexao,"INSERT INTO usuarios(nomes, email, login, senha, estado, cidade, bairro, rua, ncasa) 
	VALUES ('$nome', '$email', '$login', '$senha', '$estado', '$cidade', '$bairro', '$rua', '$ncasa')");
	
	if (isset($_POST['submit'])) {
		
		include 'cad_message.php';}

	
	
?>