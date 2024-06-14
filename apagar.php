
<?php
include('sessao.php');
include('conexao.php');
$codigovenda = filter_input(INPUT_GET, 'codigovenda', FILTER_SANITIZE_NUMBER_INT);
if(!empty($codigovenda)){
	$result_usuario = "DELETE FROM vendas WHERE codigovenda='$codigovenda'";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
	if(mysqli_affected_rows($mysqli)){
		$_SESSION['msg'] = "<script> alert('Venda cancelada com sucesso');</script>";
		header("Location: conta.php");
	}else{
		
		$_SESSION['msg'] = "<script> alert('Erro');</script>";
		header("Location: paginainicial.php");
	}
}else{	
	$_SESSION['msg'] = "<script> alert('Acesso não autorizado , Por favor digite seu e-mail e senha');</script>";
	header("Location: login.php");
}
?>