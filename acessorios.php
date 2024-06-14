<!DOCTYPE html>
<?php
include('sessao.php');
include('conexao.php');
?>
<html>
<meta charset="utf-8">
<head>
	<style>
		body{ 
			background-image:url("fundosite.png");
			background-size:cover;
			width:auto;
			heigth:auto;
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
		}
		.foto{

			max-width: 100%;
			width:4vw;
			heigth:4vw;
			margin:0.1vw 70vw -4.7vw 1vw ;
		}

		.borda-formulario{
			border-style:solid;
			border-color:#303030;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:20vw;
			heigth:90vw;
			margin:2vw 1vw 2vw;
            display: inline-block;
			
			
		}

        .borda-formulario-linha2{
			border-style:solid;
			border-color:#303030;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:20vw;
			heigth:90vw;
			margin:2vw 1vw 2vw;
            display: inline-block;
			
			
		}

        .borda-formulario-linha3{
			border-style:solid;
			border-color:#303030;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:20vw;
			heigth:90vw;
			margin:2vw 1vw 2vw;
            display: inline-block;
			
			
		}
		.borda-formulario-linha4{
			border-style:solid;
			border-color:#303030;
			box-shadow:0.9vw;
			border-width:0.5vw;
			border-radius:3vw;
			background-color:#303030 ;    
			text-align:center;
			width:20vw;
			heigth:90vw;
			margin:2vw 1vw 2vw;
            display: inline-block;
			
			
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
		h5{
			font-size:1.3vw;
			text-align:center;
			color:white;
			font-family:arial;
			font-style:italic;
			font-weight:bold;
			-webkit-text-stroke:0.1vw black;
		
		}
		.textotobi{
			
			text-align:right;
			margin:auto;
			/*margin-left:13vw;*/
			margin-top:1vw;
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
			 border-color:#303030;
			 box-shadow: 0.5vw #303030;
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
		.botaopesquisa{
			
			border-style:solid;
			 border-color:#303030;
			 box-shadow: 0.5vw #303030;
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
			height: 1.8vw;
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
		
			.chinelo{
			width:10vw;
			heigth:5vw;
			margin: auto;
			margin-left: auto;
		}
			.cachecol{
			width:11vw;
			heigth:7vw;
			margin:auto;
			margin-left:auto;
			
		}
		.caneca1{
			width:12vw;
			heigth:7vw;
			margin:auto;
			
		}
        .pulseira{
			width:11vw;
			heigth:7vw;
			margin:auto;
			
		}
        .copoterm{
			width:11vw;
			heigth:7vw;
			margin:auto;
			
		}
        .capinha{
			width:5.5vw;
			heigth:4vw;
			margin:auto;
			
		}
        .shoulder{
			width:12vw;
			heigth:7vw;
			margin:auto;
			
		}
        .garrafaterm{
			width:8.5vw;
			heigth:7vw;
			margin:auto;
			
		}
        .almofada{
			width:12vw;
			heigth:7vw;
			margin:auto;
			
		}
        .carteira{
			width:14vw;
			heigth:7vw;
			margin:auto;
			
		}
        .mouse{
			width:8vw;
			heigth:7vw;
			margin:auto;
			
		}
		.caderno{
			width:7.8vw;
			heigth:7vw;
			margin:auto;
			
		}
		.chaveiro{
			width:7.8vw;
			heigth:7vw;
			margin:auto;
			
		}
		.kitcaneca{
			width:12vw;
			heigth:7vw;
			margin:auto;
			
		}
		.kitcolar{
			width:10vw;
			heigth:7vw;
			margin:auto;
			
		}
		.caneca{
			width:12vw;
			heigth:7vw;
			margin:auto;
			
		}
		.botaocarousel{
			 border-style:solid;
			 border-color:#303030;
			 box-shadow: 1vw #303030;
			 width:4vw;
			heigth:4vw;
			 border-width:0.5vw;
			 border-radius:2vw;
			 color:white;
			 background-color:white;
			-webkit-text-stroke:0.2vw purple;
			max-width:auto;
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
		

	<div class="bem-vindo">
		
		<h3>	<img src="narutohogake.png" class="foto"></>
			<input type="text" placeholder="pesquisa" id="pesquisa" class="pesquisa" name="pesquisa"> 
			</input>
		<button type ="submit" id ="pesquisa" class="botaopesquisa" name="botaopesquisa">
			Buscar
		</button>
		
		</h3>
	 	<h3>  
		 <a href="roupas.html" class="botaopesquisa">Roupas</a> //
			<a href="cosplay.html" class="botaopesquisa">Cosplay</a> //
			<a href="bonecos.html" class="botaopesquisa">Bonecos</a> //
			<a href="mangas.html" class="botaopesquisa">Mangas</a>//
			<a href="acessorios.html" class="botaopesquisa">Acessorios</a>//
			<a href="login.php" class="botaopesquisa">Login</a>
		</h3>
		
 
	</div>
	
	


</head>
<body>
	<div class="borda-formulario">
		<form action ="venda.php" method="post">
				
			<h3> Chinelo Naruto </h3>
			<h3>
			<link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

            <div>
			<img src="acessorios/chinelo.png" class="chinelo">
			<h3 class="textosakura"> R$ 59.90 </h3>
			<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value = "2">2</option>
				<option value="3">3</option>
				<option value ="4">4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
            </div>

	</div>

    <div class="borda-formulario">
	
				
        <h3> Cachecol Akatsuki </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/cachecol.png" class="cachecol">
        <h3 class="textosakura"> R$ 45.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><button type="submit" name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario">
	
				
        <h3> Caneca Shippuden </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/caneca1.png" class="caneca1">
        <h3 class="textosakura"> R$ 59.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario">
	
				
            <h3> Pulseira Shippuden </h3>
            <h3>
            <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    
            <div>
            <img src="acessorios/pulseira.png" class="pulseira">
            <h3 class="textosakura"> R$ 48.99 </h3>
			<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
				<label>Escolha a Quantidade:</label>
				<select	name="quantidade" value="quantidade">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
				<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
				</h5>
            </div>

    </div>

    <div class="borda-formulario-linha2">
	
				
        <h3> Copo Térmico Kakashi </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/copoterm.png" class="copoterm">
        <h3 class="textosakura"> R$ 62.00 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha2">
	
				
        <h3> Capa para Smartphone Kakashi </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/capinha.png" class="capinha">
        <h3 class="textosakura"> R$ 55.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha2">
	
				
        <h3> Shoulder bag Akatsuki </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/shouder.png" class="shoulder">
        <h3 class="textosakura"> R$ 44.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha2">
	
				
        <h3> Garrafa térmica 600ml </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/garrafaterm.png" class="garrafaterm">
        <h3 class="textosakura"> R$ 84.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha3">
	
				
        <h3> Almofada Decorativa </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/almofada.png" class="almofada">
        <h3 class="textosakura"> R$ 39.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha3">
	
				
        <h3> Carteira Nuvem Akatsuki </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/carteira.png" class="carteira">
        <h3 class="textosakura"> R$ 57.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade"value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

    <div class="borda-formulario-linha3">
	
				
        <h3> Mouse Gamer Naruto </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/mouse.png" class="mouse">
        <h3 class="textosakura"> R$ 145.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

	<div class="borda-formulario-linha3">
	
				
        <h3> Caderno Universitário 96fls </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/caderno.png" class="caderno">
        <h3 class="textosakura"> R$ 29.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

	<div class="borda-formulario-linha4">
	
				
        <h3> Chaveiro Funko Shippuden </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/chaveiro.png" class="chaveiro">
        <h3 class="textosakura"> R$ 65.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

	<div class="borda-formulario-linha4">
	
				
        <h3> Kit caneca Akatsuki Itachi </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/kitcaneca.png" class="kitcaneca">
        <h3 class="textosakura"> R$ 86.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp"value="codigovenda" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

	<div class="borda-formulario-linha4">
	
				
        <h3> Kit Colar Konoha Akatsuki </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/kitcolar.png" class="kitcolar">
        <h3 class="textosakura"> R$ 29.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp" value="codigovenda">Compre Aqui </br>
			</h5>
        </div>

    </div>

	<div class="borda-formulario-linha4">
	
				
        <h3> Caneca Decotariva </h3>
        <h3>
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>

        <div>
        <img src="acessorios/caneca.png" class="caneca">
        <h3 class="textosakura"> R$ 49.90 </h3>
		<h5 onmouseover="style.color='orange'" onmouseout="style.color='white'">
			<label>Escolha a Quantidade:</label>
			<select	name="quantidade" value="quantidade">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			<br><input	type="checkbox"	name="comp"	id="icomp"value="codigovenda">Compre Aqui </br>
			</h5>
			<button type="submit" onclick="botao()" id="cadastro" name="enviar" value="comprar"  class="botaoenviar" >
				Comprar
				</button>
        </div>

    </div>
	
</article>

			<p></p>
		
		
	</div>
	</form>
</body>
	<script>
	var $simpleCarousel = document.querySelector(".js-carousel--simple");

	new Glider($simpleCarousel, {
 		 slidesToShow: 1,
  		slidesToScroll: 1,
 		 draggable: true,
 		 dots: ".js-carousel--simple-dots",
 	arrows: {
    		prev: ".js-carousel--simple-prev",
    		next: ".js-carousel--simple-next",
 		 },
	});
	</script>
<footer> 
		
		<h4>
			<a href="sobrenos.html" name="sobrenos" id="sobrenos" class="sobrenos">
			Conheca mais sobre os criadores deste conteudo
			</a>
		</h4>
		
	
</footer>
</html>
