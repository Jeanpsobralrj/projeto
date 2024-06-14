<?php
$localhost = "localhost";
$bancodedados = "bdnaruto";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($localhost, $usuario ,$senha,$bancodedados);
	if($mysqli ->connect_errno){
		echo "falha ao conectar(" .$mysqli->connect_errno.") ". $mysqli->connect_error;
}

?>