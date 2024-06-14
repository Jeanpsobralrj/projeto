<!DOCTYPE html>
<html>
<?php
include('sessao.php');
include('conexao.php');
$email = filter_input(INPUT_GET, 'email',  FILTER_SANITIZE_EMAIL);
$resultado_usuario = "SELECT * FROM cliente WHERE email = '$email'";
$resultado_usuario = mysqli_query($mysqli, $resultado_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<head>
	<style>
		body{ 
			background-image:url("fundosite.png");
			background-size:cover;
			width:auto auto;
		}
		.bem-vindo{
			 border-style:solid;
			 border-color:black;
			 box-shadow: 0.1vw black;
			 border-width:0.3vw;
			 border-radius:2vw;
			 color:black;
			 background-color:#303030 ;    
			 text-align:center;
			 width:80vw;
			 margin:auto 8vw auto;
			 
		}

		.borda-formulario{
			border-style:solid;
			border-color:black;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:50vw;
			margin:2vw 23vw 2vw;
			
		}
		h1{
			text-align:center;
			font-align:center;
			color : white;
			font-family: arial;
			font-style:italic;
			font-weight:bold;
			font-size:3vw;
			text-align:center;
		}
		h2{
			text-align:center;
			font-align:center;
			color : #451a4d;
			font-family: arial;
			font-weight:bold;
			font-style:italic;
			font-size:3vw;
			text-align:center;
			
			}
		h4{
			color:white;
			font-family: arial;
			font-style:italic;
			font-weight:bold;
			font-size:1.5vw;
			text-align:center;
			-webkit-text-stroke:0.1vw black;
			
		}
		h3{
			font-size:1.6vw;
			text-align:center;
			color:white;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			-webkit-text-stroke:0.1vw black;
		
		}
		.titulo{
			font-size:2vw;
			text-align:center;
			color:#451a4d;
			font-family:arial;
			
			-webkit-text-stroke: 0.1vw white;
			 
		}
		p{
			font-size:2vw;
			text-align:center;
			color:white;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			-webkit-text-stroke:0.1vw purple;
			
			
			
			
		}
		.botao{
			border-style:solid;
			 border-color:white;
			 box-shadow: 1vw black;
			 border-width:0.3vw;
			 border-radius:2vw;
			 color:orange;
			 background-color:white;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			font-size:1.5vw;
			text-decoration:none;
			font-weight: bold;
			-webkit-text-stroke:0.1vw black;
			
		}
			.sobrenos{
				color:black;
				font-family: arial;
				font-style:italic;
				font-weight:bold;
				font-size:1.5vw;
				text-align:center;
				-webkit-text-stroke:0.01vw black;
				text-decoration:none;
				
			}
	</style>
		
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

					<script>
						function botao(){
						
							swal({
							title: "Senha redefinida",
							text: "Acesso liberado",
							icon: "success",
							button: "",
							});

							}
					</script>
					

	<div class="bem-vindo">
	 	 <h1> Redefinir sua senha </h1>
 
	</div>
	
	


</head>
<body>
	<div class="borda-formulario">
			
			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<form action="atualizar.php" method="post">
				
				<h4>
					<label for="senha">Atualize sua senha:</label>
				</h4>
				<h4>
					<input type="password" id="senha" name="senha" class="botao" value="">
				</h4>
				<h4>
					<label for="senha">Confirme seu e-mail</label>
				</h4>
				<h4>
					<input type="text" id="senha" name="email" class="botao" value="">
				</h4>
			
				<h3>
					<button type="submit" onclick=botao() id ="botao" value="Enviar" class="botao"> Concluir </button>
				</h3>
				</form>
				</h4>
	
				<h3><a href="conta.php" name="botao" button class="botao" value="cadastro"> Voltar
					</a>  
					</button>
				</h3>
				
			
				
		
	</div>
</body>
<footer> 
		
		<h4>
			<a href="sobrenos.html" name="sobrenos" id="sobrenos" class="sobrenos">
			Conheca mais sobre os criadores deste conteudo
		</a>
		</h4>
		
	
</footer>
</html>
