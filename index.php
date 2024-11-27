<?php

	session_start();

	if (isset($_SESSION['message'])) {
		echo "<p>" . $_SESSION['message'] . "</p>";
		unset($_SESSION['message']);
	}


	if (isset($_SESSION['usuario'])) {
		echo "<p>Você está logado como " . $_SESSION['usuario'] . ".</p>";

		echo "<a href='index.php' class='btn btn-dark'>Sair" . session_destroy() . "</a>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body style="margin: 37px;">

	<?php if (!isset($_SESSION['usuario'])) { ?>

	<form name="logar" method="post" action="validar.php">
		<label for="login">Login:</label>
		<input type="text" name="login" id="login" autofocus autocomplete="off">
		<br><br>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha">
		<br><br>
		<input class="btn btn-dark" type="submit" name="enviar" value="Enviar">
	</form>

	<?php } ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>
