<?php
session_start();
include('conexao.php');
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$justsu = filter_input(INPUT_POST, 'justsu', FILTER_SANITIZE_STRING);
	$datanascimento = filter_input(INPUT_POST, 'datanascimento', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO `cliente`(`cpf`, `nome`, `email`, `justsu`, `datanascimento`, `senha`, `endereco`) VALUES ('$cpf','$nome','$email','$justsu','$datanascimento','$senha','$endereco')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

		if(mysqli_insert_id($mysqli)){
			$_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso </p>";
			header("Location: login.php");
		}
		else{
			$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
			header("Location: cadastro.php");
		}
	?>