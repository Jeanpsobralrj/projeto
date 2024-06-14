<?php
include('sessao.php');
include('conexao.php');
$email = filter_input(INPUT_GET, 'email',FILTER_SANITIZE_STRING);
if(!empty($email)){
	$result_usuario = "DELETE FROM cliente WHERE `cliente`.`email` = '$email'";
	
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
	if(mysqli_affected_rows($mysqli)){
		$mensagem = $_SESSION['msg'] = "<script type='javascript'> alert('Venda cancelada com sucesso');</script>";
		echo '$mensagem';
		header("Location: conta.php");
	}else{
		
		$_SESSION['msg'] = "<script> alert('Erro');</script>";
		header("Location: paginainicial.php");
	}
}else{	
	$mensageme = $_SESSION['msg'] = "<script type='javascript'> alert('Acesso não autorizado , Por favor digite seu e-mail e senha');</script>";
	echo '$mensageme';
	header("Location: login.php");
}
?>