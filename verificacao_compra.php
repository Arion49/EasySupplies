<?php

require 'openBD.php';
session_start();

if (isset($_SESSION["login"]) || isset($_SESSION["senha"])) {

	if(isset($_POST['enviar_btn']))
	{

        $mensais = "";
         $modos_t = "";

        $id_assinatura = $_GET['id_produto'];
        $id_usuario = $_SESSION['id'];
        $quantidade = $_POST['kits'];
        $tipo = "medio"; //post quando adiciona no formulário Ex: $_POST['tipo'];
        $modo_entregas = $_POST['entregas_tipo'];
        $forma_pagamento = $_POST['group1'];
        $titulo_produto = $_GET['titulo_produto'];
        $preco_produto = $_GET['preco_produto'];

       // inserir os dados ao banco de dados
        $sql = mysqli_query($conexao, "INSERT INTO minha_ass(id,id_assinaturas,id_usuario,quantidade,tipo, modo_entrega,forma_pagamento,titulo_produto,preco_produto) VALUES(NULL,'$id_assinatura','$id_usuario','$quantidade','$tipo', '$modo_entregas','$forma_pagamento', '$titulo_produto', '$preco_produto')") or die (mysqli_error($conexao));
 
          header("Location: minhas_assina.php");
	}

}else
{
	header("Location: cad.php");
}

				



?>