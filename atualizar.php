<<?php
include('sessao.php');
include('conexao.php');


$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE `cliente` SET `senha` = '$senha'  WHERE `cliente`.`email` = '$email' ";



$resultado_usuario = mysqli_query( $mysqli, $result_usuario);

if(mysqli_affected_rows($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Acesso liberado , Altere sua senha</p>";
	header("Location: login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: paginainicial.html");
}
?>
