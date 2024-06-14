<! -- trabalho grupo 4  -->

<html>

	<style>
		body{ 
				background-image:url("fundosite.png");
				background-size:cover;
				width:100% 100%;
			}
			.bem-vindo{
				 border-style:solid;
				 border-color:black;
				 box-shadow: 0.1vw black;
				 border-width:0.3vw;
				 border-radius:2vw;
				 color:white;
				 background-color:#303030 ;    
				 text-align:center;
				 width:90vw;
				 margin:3vw 4vw 3vw;
				
				 
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
				margin:6vw 30vw auto;
				
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
				color:white;
				font-family: arial;
				font-weight:bold;
				font-style:italic;
				font-size:2vw;
				text-align:center;
				
				}
			h4{
				color:white;
				font-family: arial;
				font-style:italic;
				font-weight:bold;
				font-size:1.5vw;
				text-align:center;
				-webkit-text-stroke:0.01vw black;
				text-decoration:none;
				
			}
			
			h3{
				font-size:1.6vw;
				text-align:center;
				color:black;
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
				font-style:italic;
				font-weight:bold;
				-webkit-text-stroke: 0.1vw white;
				 
			}

			p{
				font-size:2vw;
				text-align:center;
				color:white;
				font-family:arial;
				font-style:italic;
				font-weight:bold;
				-webkit-text-stroke:0.1vw black;
					
			}
			.botao{
				border-style:solid;
				 border-color:white;
				 box-shadow: 1vw black;
				 border-width:0.5vw;
				 border-radius:2vw;
				 color:black;
				 background-color:white;
				font-family:arial;
				font-style:italic;
				font-weight:bold;
				font-size:1.6vw;
				text-decoration:none;
				font-weight: bold;
				-webkit-text-stroke:0.1vw black;
				
			}
			.botaoenviar{
				border-style:solid;
				 border-color:white;
				 box-shadow: 0.5vw black;
				 border-width:0.3vw;
				 border-radius:2vw;
				 background-color:white;
				color:orange;
				font-family:arial;
				font-style:italic;
				font-weight:bold;
				font-size:2vw;
				text-decoration:none;
				font-weight:bold;
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
		<head>
		<meta charset="utf-8">
					<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					<script>
						function botao(){
						
							swal({
							title: "Seja bem vindo shinobi",
							text: "Se prepare para a prova chunin !",
							icon: "success",
							button: "Seu Acesso esta liberado",
							});

							}
					</script>
	
			<div class="bem-vindo">
				<h2>Conheca nossos produtos</h2>
			</div>
		</head>
	
	<body>

		<div class="borda-formulario">
		
			<form action ="inserir.php" method="post">

			<h4>
					<label for="jus"> Qual seu jutsu ? </label>
				
			</h4>
			<h4>
				<input type="text" placeholder="Clone das sombras" id="jus" name="justsu" class="botao">
			
			</h4>
			<h4>
					<label for="nome" > Nome</label>
				
			</h4>
			<h4>
				<input type="text" id="nome" name="nome" class="botao" placeholder="Digite aqui seu nome">
			</h4>

			<h4>
					<label for="cpf"> Digite seu cpf:</label>
				
			</h4>
			<h4>
				<input type="text" id="cpf" name="cpf" class="botao" placeholder="Digite sem tracos,pontos ..">
			</h4>
			<h4>
				
					<label for="endereço" >Endereço</label>
			
			</h4>
			<h4>
				<input type="text" placeholder=" Endereco ou cep  ...." id="jus" name="endereco" class="botao">
			</h4>
			<h4>
			
					<label for="date"> Data </label>
				</h4>
			
			<h4>
			
				<input type="date" id="aniversario" name="datanascimento" class="botao"> </p>
			</h4>
			
			<h4>
				
					<label for="e-mail">E-mail</label>
				
			</h4>
				<input type="text" placeholder="email@email.com" id="email" name="email" class="botao">
			
					
			<h4>	
				<label for="senha">Criar Senha</label>
				
			</h4>
				<input type="password" class="botao" id="senha" name="senha" placeholder="Digite a senha">
			<h4>
				
					<label for="senha" >Confirmar senha</label>

			</h4>
			<h4>
				<input type="password" class="botao" id="senha" name="senha" placeholder="Confirme a senha">
			</h4>

			
			<h4>
				<button type="submit" onclick="botao()" id="cadastro" name="enviar" value="cadastro"  class="botaoenviar" >
				Enviar	
				</button>
				</form>
			
				
				<a href="login.php" name="cadastro" class="botaoenviar" value="cadastro">Voltar</a>  
					</button>
			</h4>
			
		
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
