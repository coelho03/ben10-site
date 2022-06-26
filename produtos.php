<?php session_start(); 
	if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
		header('location: login.php');
	}else{
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style_produtos.css">
			<title>Produtos</title>
		</head>
		<body>
			<div id="site">
				<header>
					<div id="menu_btn"> 
						<ul id="menu_atalhos">
							<li><a href="produtos.<?php  ?>" style="background-color: #C6E115;">Produtos</a></li>
							<li><a href="versoes.php">Modelos</a></li>
						</ul>
					</div>
					<div id="cadastro_btn">
						<a href="area_cliente.php">Área do usuário</a>
					</div>
				</header>
				<main>
					<div class="produto">
						<img src="produtos/bola.png">
						<h3>Bola de Vinil</h3>
					</div>
					<div class="produto">
						<img src="produtos/boneco_articulado.png">
						<h3>Boneco articulado</h3>
					</div>
					<div class="produto">
						<img src="produtos/boneco_chamas.png">
						<h3>Boneco - Lança chamas</h3>
					</div>
					<div class="produto">
						<img src="produtos/camiseta.png">
						<h3>Camiseta</h3>
					</div>
					<div class="produto">
						<img src="produtos/chinelo.png">
						<h3>Chinelo havaianas</h3>
					</div>
					<div class="produto">
						<img src="produtos/colonia.png">
						<h3>Colônia</h3>
					</div>
					<div class="produto">
						<img src="produtos/conjunto_cama.png">
						<h3>Conjunto de cama - completo</h3>
					</div>
					<div class="produto">
						<img src="produtos/laptop.png">
						<h3>Laptop</h3>
					</div>
					<div class="produto">
						<img src="produtos/moletom.png">
						<h3>Moletom</h3>
					</div>
					<div class="produto">
						<img src="produtos/omnitrix.png">
						<h3>Prancha isopor</h3>
					</div>
					<div class="produto">
						<img src="produtos/sunga.png">
						<h3>Sunga</h3>
					</div>
					<div class="produto">
						<img src="produtos/vilgax.png">
						<h3>Vilgax - boneco articulado</h3>
					</div>
				</main>
				<footer> </footer>
			</div>
		</body>
		</html>
	<?php
	}
?>