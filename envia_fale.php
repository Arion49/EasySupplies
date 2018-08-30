<?php
 
/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/
 

 
 
/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
 
$enviaFormularioParaNome = 'EasySupplies';
$enviaFormularioParaEmail = 'easysuppliestcc@gmail.com';
 
$caixaPostalServidorNome = 'EasySupplies / Formulário';
$caixaPostalServidorEmail = 'contact.easysupplies@gmail.com';
$caixaPostalServidorSenha = 'produtosorganicos';
 
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
 
 
/* abaixo as veriaveis principais, que devem conter em seu formulario*/
 
$remetenteNome  = $_POST['remetenteNome'];
$remetenteEmail = $_POST['remetenteEmail'];
$remetenteTel = $_POST['remetenteTel'];
$assunto  = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
 
$mensagemConcatenada = 'Formulário para contato EasySupplies'.'<br>'; 
$mensagemConcatenada .= '-------------------------------<br><br>'; 
$mensagemConcatenada .= '<b>Nome:</b> '.$remetenteNome.'<br>'; 
$mensagemConcatenada .= '<b>E-mail:</b> '.$remetenteEmail.'<br>'; 
$mensagemConcatenada .= '<b>Assunto:</b> '.$assunto.'<br>';
$mensagemConcatenada .= '<b>Telefone:</b> '.$remetenteTel.'<br>'; 
$mensagemConcatenada .= '<br>-------------------------------<br><br>'; 
$mensagemConcatenada .= '<b>Mensagem:</b> "'.$mensagem.'"<br>';
 
 
/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
 
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
 
$mail = new PHPMailer();
 
$mail->SMTPDebug = 2;  
$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.gmail.com';
$mail->Port  = '587';
$mail->SMTPSecure = 'tls'; 
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);
 
 
$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
 
if ($mail->send()) { 
        header("Location: index.php");
    } else {
        $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
        header("Location: contact.php");}
 
 

?>