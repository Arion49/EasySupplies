<?php
# alterar a variavel abaixo colocando o seu email

ini_set('display_errors', 1);

error_reporting(E_ALL);

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

$envio = mail($destinatario, $assunto , $body, "From: $email\r\n");
// redireciona para a página de obrigado

if(isset($envio)){
 echo "Mensagem enviada com sucesso";
}
else{
 echo "A mensagem não pode ser enviada";
};

header("location:index.php");




?>

