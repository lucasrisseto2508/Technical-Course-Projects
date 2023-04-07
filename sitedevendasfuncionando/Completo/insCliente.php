<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulaitq";

	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];

	$foto = addslashes(file_get_contents($_FILES['arquivo']['tmp_name']));
	 
	// Create connection
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
	// Check connection
	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO Clientes VALUES (null, '$nome', '$endereco', '$foto');";
	$conn->query($sql);

	$conn->close();

	header("location: cadastroClientes.php");
?>