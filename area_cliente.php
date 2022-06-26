<?php session_start(); 
	if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
		header('location: index.php');
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style_cliente.css">
			<title>Área do Cliente</title>
		</head>
		<body>
			<div id="site">
				<div id="info">
					<h1>Informações do usuário</h1>
					<p>Login: <?php echo $_SESSION['login'];?></p>
					<p>Senha: <i>oculto</i></p>
					<div id="btn_config">
						<a href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</body>
		</html>
<?php
	}
?> 
