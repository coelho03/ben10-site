<?php session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];

	if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
		header('location: login.php');
	}else{
		?>
		<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ben10 shop</title>
  <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div id="site">
		<header>
			<div id="menu_btn"> 
				<ul id="menu_atalhos">
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="versoes.php">Monstros</a></li>
				</ul>
			</div>
			<div id="cadastro_btn">
				<a href="area_cliente.php">Área do usuário</a>
			</div>
		</header>
		<section id="main"> 
			<div id="promo">
				<h3>Compre já o seu!</h3>
				<p>Por apenas <strong>R$49,90</strong> adquira o item que te trará segurança, felicidade, diversão e muitos amigos!!!</p>
				<p>Seja como o seu herói favorito e assuma até 10 formas diferentes, onde quer que esteja e quando precisar!!</p>
				<p>Frete grátis para todo o Brasil e <strong>brindes</strong> para compras acima de R$39,90</p>
			</div>
			<div id="photo_omnitrix">
				<img src="omnitrix_section.png" id="photo_promo">
			</div>
		</section>
		<div id="quadros">
			<div class="mini_box">
				<h3>BENEFICIOS</h3>
				<ul class="list_info">
					<li>Contribuindo para a sua felicidade</li>
					<li>Para proteger a qualquer hora</li>
					<li>Eu prometo, você não vai se arrepender</li>
				</ul>
			</div>
			<div class="mini_box">
				<h3>SUPORTE</h3>
				<ul class="list_info">
					<li>Caso haja qualquer dúvida</li>
					<li>Se estiver algo dando erro na sua compra</li>
					<li>Ou o omnitrix ainda não parece certo</li>
				</ul>
			</div>
			<div class="mini_box">
				<h3>COMPRE JÁ!</h3>
				<ul class="list_info">
					<li>Chega em poucos dias!</li>
					<li>O maior custo benefício!</li>
					<li>Garante já o seu!</li>
				</ul>
			</div>
		</div>
		<footer> </footer>
	</div>
</body>

</html>
	<?php 
	}
?>