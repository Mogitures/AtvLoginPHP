<?php
	session_start();

	if (isset($_GET['acao']) && $_GET['acao'] == 'sim') {

		session_destroy();

		$_SESSION['message'] = "Você saiu da sua conta.";

		header("Location: index.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saindo...</title>
</head>
<body>

	<h2>Você tem certeza que quer sair?</h2>
	<p>

		<a href="index.php">Não</a>

		<a href="sair.php?acao=sim">Sim</a>
		
	</p>

</body>
</html>
