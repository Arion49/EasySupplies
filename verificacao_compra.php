<?php

require 'openBD.php';
session_start();

if (isset($_SESSION["login"]) || isset($_SESSION["senha"])) {
	header("Location: comprar.php")
} else {
	header("Location: cad.php");
}

				



?>