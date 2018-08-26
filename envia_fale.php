<?php
# alterar a variavel abaixo colocando o seu email
EAE EDUARD
$destinatario = "arion.cerceau@gmail.com";

$nome = $_POST['nome'];
$email = $_POST['email'];
$detalhes = $_POST['detalhes'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - EASYSUPPLIES" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Detalhes: " . $detalhes . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index.php");


?>