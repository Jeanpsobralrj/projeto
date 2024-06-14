<?php
session_start();
include('conexao.php');

	$codigovenda = filter_input(INPUT_POST, 'codigovenda', FILTER_SANITIZE_NUMBER_INT);
	$codigoproduto = filter_input(INPUT_POST, 'codigoproduto', FILTER_SANITIZE_NUMBER_INT);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$datavenda = filter_input(INPUT_POST, 'datavenda', FILTER_SANITIZE_NUMBER_INT);
	$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";


$result_usuario = "INSERT INTO `vendas` (`codigovenda`, `codigoproduto`, `email`, `datavenda`, `quantidade`) VALUES ('','', email='$email', datavenda='current_timestamp()',quantidade ='$quantidade')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

		if(mysqli_insert_id($mysqli)){
			$_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso </p>";
			header("Location: acessorios.php");
		}
		else{
			$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
			header("Location: paginainicial.php");
		}
	?>