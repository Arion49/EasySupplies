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

session_start();

$id = $_SESSION['id'];

$sql = mysqli_query($conexao, "UPDATE usuarios SET nomes ='$nome', email='$email', login='$login', senha='$senha', estado='$estado', cidade='$cidade', bairro='$bairro', 
	rua='$rua', ncasa='$ncasa' WHERE id='$id'") or die(mysqli_error($conexao));

$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
$_SESSION['estados'] = $estados;
$_SESSION['cidade'] = $cidade;
$_SESSION['bairro'] = $bairro;
$_SESSION['rua'] = $rua;
$_SESSION['ncasa'] = $ncasa;


mysqli_close($conexao);

header("Location: index.php");



?>