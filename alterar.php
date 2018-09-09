<?php
require 'openBD.php';
error_reporting(0);

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

$query_select_login = "SELECT login FROM usuarios WHERE login = '$login'";
$query_select_email = "SELECT email FROM usuarios WHERE email = '$email'";

$select_login = mysqli_query($conexao,$query_select_login);
$array_login = mysqli_fetch_array($select_login);
$logarray = $array_login['login'];

$select_email = mysqli_query($conexao,$query_select_email);
$array_email = mysqli_fetch_array($select_email);
$emailarray = $array_email['email'];



if ($logarray == $login && $logarray != $_SESSION['login'] || $emailarray == $email && $emailarray != $_SESSION['email']) {
	
	include 'editar_perfil.php';

	echo "
	<script type='text/javascript'>

		M.toast({html: 'Email ou login já cadastrados', classes: 'rounded'});

	</script>";

	exit();

}

else{

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


header("Location: index.php"); }



?>