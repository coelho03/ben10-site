<?php session_start();
	if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
		header('location: login.php');
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style_versoes.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Monstros</title>
		</head>
		<body>
			<div id="site">
				<header>
					<div id="menu_btn"> 
						<ul id="menu_atalhos">
							<li><a href="produtos.php">Produtos</a></li>
							<li><a href="versoes.php" style="background-color: #C6E115;">Monstros</a></li>
						</ul>
					</div>
					<div id="cadastro_btn">
						<a href="area_cliente.php">Área do usuário</a>
					</div>
				</header>
				<main>
					<div class="monstro">
						<img src="monstros/aquatico.png">
						<h3>Aquático</h3>
					</div>
					<div class="monstro">
						<img src="monstros/besta.png">
						<h3>Besta</h3>
					</div>
					<div class="monstro">
						<img src="monstros/diamante.png">
						<h3>Diamante</h3>
					</div>
					<div class="monstro">
						<img src="monstros/fantasmatico.png">
						<h3>Fantasmático</h3>
					</div>
					<div class="monstro">
						<img src="monstros/insectoide.png">
						<h3>Insectóide</h3>
					</div>
					<div class="monstro">
						<img src="monstros/quatro_bracos.png">
						<h3>Quatro Braços</h3>
					</div>
					<div class="monstro">
						<img src="monstros/ultraT.png">
						<h3>Ultra T</h3>
					</div>
					<div class="monstro">
						<img src="monstros/XRL8.png">
						<h3>XRL8</h3>
					</div>
				</main>
				<footer> </footer>
			</div>
		</body>
		</html>
		<?php
	}
?>