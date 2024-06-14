<?php 
include ("conexao.php");

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
			
        echo "<script> confirm('preecha o campo email')</script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script>confirm('preecha o campo senha')</script>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT email,senha FROM cliente WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
			  $_SESSION['nome'] = $usuario['nome'];
			  $_SESSION['email'] = $usuario['email'];
          
			
            header("Location:conta.php");

				} 
		else {
            echo "<script> alert('Falha ao logar! E-mail ou senha incorretos');</script>";
        }

    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{ 
			background-image:url("naruto.jpg");
			background-size:cover;
			width:100% 100%;
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
			 margin:auto 10vw auto;
			 
		}
		.bem-vindo:hover{
			transtion:1s;
			border-style:solid;
			font-color:transparent;
			background-color:transparent;
			Opacity:0.1;
			
		}
		.borda-formulario{
			border-style:solid;
			border-color:black;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:30vw;
			margin:2vw 15vw 2vw;
			
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
							title: "Modo sabio ativado",
							text: "Acesso liberado",
							icon: "success",
							button: "Entrar",
							}).then((value) => {
         							   window.location = "conta.html"
     									   })

							}
							function erro(){
						
							swal({
							title: "acabou o chakra",
							text: "Acesso liberado",
							icon: "success",
							button: "Entrar",
						

							}
							function botao(){
						
							swal({
							title: "Modo sabio ativado",
							text: "Acesso liberado",
							icon: "success",
							button: "Entrar",
							}).then((value) => {
         							   window.location = "conta.php"
     									   })

							}
					</script>
					
	
		<h2 class="titulo">Seja bem-vindo otaku</h2>

	<div class="bem-vindo">
	  <h3>Qual seu jeito ninja ?</h3>
	  

	</div>
	
	


</head>
<body>
	<div class="borda-formulario" name="formulario">
	
		<form action="" id="formulario" method="post">
				<legend>
					<h4></h4>
				</legend>
				<h4>
					<label for="nome" id="login" name="login">E-mail:</label>
				</h4>
				<h4>
					<input type="text" id="nome" name="email" class="botao">
				</h4>
				<h4>
					<label for="senha" >Senha:</label>
				</h4>
				<h4>
					<input type="password" id="senha" name="senha" class="botao">
				</h4>
				
				<h3>
					<button type="submit" onclick="botao()" id ="botao" value="Login" class="botao"> Login</button>
				</form>
				
				<a href="paginainicial.html" name="botao" button class="botao" value="voltar"> Voltar 
					</a>  
					</button>
				</h3>
				<h3><a href="trocasenha.php" name="esqueceu" button class="botao" value="esqueceu"> Esqueceu a senha?
					</a>  
					</button>
				</h3>
			
				<h3><a href="cadastro.php" name="botao" button class="botao" value="cadastro"> Crie seu cadastro
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

