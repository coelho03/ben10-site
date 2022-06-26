<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style_cadastro.css">
	<title>Cadastro</title>
</head>
<body>
	<div id="site">
		<div id="login">
			<form method="post" action="index.php">
				<center><h3>Login</h3></center>
				<p>Login:<br>
					<input type="text" name="login" id="campo_grande" required>
				</p>
				<p>Senha:<br>
					<input type="password" name="senha" id="campo_grande" required>
				</p>
				<center><button type="submit">ENVIAR</button></center>
			</form>
		</div>
	</div>	
</body>
</html>