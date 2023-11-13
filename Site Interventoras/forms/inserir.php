<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enviar</title>
</head>
<body>
	<?php

	$host 	= 'localhost';
	$user 	= 'root';
	$pass 	= '';
	$db 	= 'si3dwa';

	// Conecta ao banco de dados
	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn) {
		
		exit();
		header("Location.form1.html");

	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		// Inserir os dados na tabelas 'usuarios'
		$sql = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

		if(mysqli_query($conn, $sql)) {
			echo "<h2>Registro inserido com sucesso!</h2>";
		} else {
			echo "<h2>Erro ao inserir registro: " . mysqli_error($conn) . "</h2>";
		}

	}



	?>
</body>
</html>