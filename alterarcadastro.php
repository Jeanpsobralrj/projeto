<html>
<?php
include('sessao.php');
include('conexao.php');

?>
<meta charset="utf-8">
	<style>
		head{
			background-size:cover;
			width:100%;
			heigth:100%;
			margin:auto;
			max-width:auto;
		}
		body{ 
			background-image:url("fundosite.png");
			background-size:cover;
			width:100%;
			heigth:100%;
			margin:auto;
			max-width:auto;
		}
		.bem-vindo{
			 border-style:solid;
			 border-color:black;
			 box-shadow: 2vw black;
			 border-width:100%;
			 border-radius:0.5vw;
			 color:black;
			 background-color:#303030 ;    
			 text-align:center;
			 width:auto auto;
			 margin:auto auto auto auto;
			 word-break:normal;
			 max-width:auto;
			 width:100vw;
			 heigth:10vw;;
		}
		.foto{

			max-width: 100%;
			width:4vw;
			heigth:100%;
			margin:0.1vw 70vw -4.7vw 1vw ;
		}

		.borda-formulario{
			border-style:solid;
			border-color:#303030;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:2vw;
			background-color:#303030 ;    
			text-align:center;
			width:70vw;
			heigth:10vw;
			margin:auto;
			margin-top:1vw;
			max-width:auto;
			
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
		.textotobi{
			
			text-align:left;
			margin:auto;
			margin-left:38vw;
			margin-top:auto;
		}
		.textosakura{
			text-align:center;
			margin:auto;
			margin-top:2vw;
			margin-left:-1vw;
		}
		.textojiraya{
			text-align:right;
			margin:auto;
			margin-top:1vw;
			margin-right:39vw;
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
			 box-shadow: 0.5vw #303030;
			 border-width:0.3vw;
			 border-radius:3vw;
			 color:black;
			 background-color:white;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			font-size:1.5vw;
			text-decoration:none;
			font-weight: bold;
			-webkit-text-stroke:0.1vw black;
			
		}
		.botaopesquisa{
			
			border-style:solid;
			 border-color:#303030;
			 box-shadow: 0.8vw #303030;
			 border-width:0.3vw;
			 border-radius:3vw;
			 color:white;
			 background-color:#303030;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			font-size:1.5vw;
			text-decoration:none;
			font-weight: bold;
			-webkit-text-stroke:0.1vw black;
		
		}

		.pesquisa{
			height: 3vw;
			width: 40vw;
			margin:-10vw 2vw -1vw 1vw;
			border-style:solid;
			 border-color:white;
			 box-shadow: 9vw #303030 ;
			 border-width:0.3vw;
			 border-radius:3vw;
			 color:orange;
			 background-color:white;
			font-color:#303030;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			font-size:1.5vw;
			text-decoration:none;
			font-weight: bold;
			-webkit-text-stroke:0.1vw #303030;
			max-width:auto;
			}	
		
			.sakura{
			max-width:auto;
			width:20vw;
			heigth:10vw;
			margin:auto;
			margin-left:auto;
		}
			.tobi{
			max-width:auto;
			width:17vw;
			heigth:10vw;
			margin:auto;
			margin-left:12vw;
			
		}
		.jirayacamisa{
			max-width:auto;
			width:14vw;
			heigth:10vw;
			margin:auto;
			
		}
		.botaocarousel{
			 border-style:solid;
			 border-color:#303030;
			 box-shadow: 1vw #303030;
			 width:5vw;
			 heigth:5vw;
			 border-width:0.5vw;
			 border-radius:2vw;
			 color:white;
			 background-color:white;
			-webkit-text-stroke:0.2vw purple;
			max-width:100%;
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

	<div class="bem-vindo">
		
			<img src="narutohogake.png" class="foto"></>
		<h3>
			<a href="logout.php" class="botaopesquisa">Sair</a>//
			<a href="trocasenha.php" class="botaopesquisa">Esqueceu sua senha ? </a>//
			<a href="conta.php" class="botaopesquisa">Conta</a>//
			
			Ola, Agradecemos sua presença <?php echo $_SESSION['nome']; ?>.

		</h3>
		
 
	</div>
	
	


	</head>
<body>
	
	<div class="borda-formulario">
	
		<h3><h1> Alterar cadastro </h1></h3>
    <form action="">
        <input name="busca"  class="pesquisa" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite seu email ou cpf " type="text">
        <button type="submit" class="botaopesquisa">Pesquisar</button>
    </form>
	<h3> * Observação: Por motivos de segurança , So e possivel excluir a sua conta logada.<h3>
    <br>
    <table width="auto" margin-left="auto" border="1" text-align="center" font-style="italic" font-size="1.5vw">
			<center>
			
        <tr>
            <th><h3>Nome </h3></th>
            <th><h3>Cpf </h3></th>
			<th><h3>justsu</h3></th>
			<th><h3>E-mail</h3></th>
			<th><h3>Data Nascimento</h3></th>
			<th><h3> Endereço</h3></th>
			<th><h3> Clica no botão para apagar seu cadastro</h3></th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <tr>
           <td colspan="7" ></td>

			
        </tr>
			</center>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT *
                FROM cliente
                WHERE nome LIKE '%$pesquisa%' 
                OR cpf LIKE '%$pesquisa%'
				OR justsu LIKE '%$pesquisa%'
				OR email LIKE '%$pesquisa%'
                OR datanascimento LIKE '%$pesquisa%'
				OR endereco LIKE '%$pesquisa%'
				";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
               <h3> <td colspan="7"> <h3>Nenhum resultado encontrado...</h3></td> 
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
					<tr class="h3"> 
                        <td><h3><?php echo $dados['nome']; ?></h3></td>
                        <td><h3><?php echo $dados['cpf']; ?></h3></td>
						<td><h3><?php echo $dados['justsu']; ?></h3></td>
						<td><h3><?php echo $dados['email']; ?></h3></td>
						<td><h3><?php echo $dados['datanascimento']; ?></h3></td>
						<td><h3><?php echo $dados['endereco']; ?></h3></td>
						<td><h3><?php echo "<a class='botaopesquisa' href='apagarcadastro.php?email=" .$dados['email'] . "'>Apagar</a>";?></h3></td>
					
						
					
                    </tr> 
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
	
</body>
				
		
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
