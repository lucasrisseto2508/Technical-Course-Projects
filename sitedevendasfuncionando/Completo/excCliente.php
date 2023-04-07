<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulaitq";

	$cod = $_GET['codigo'];
	
	// Create connection
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
	// Check connection
	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "DELETE FROM Clientes WHERE codigo = $cod";
	$conn->query($sql);

	$conn->close();

	header("location: cadastroClientes.php");
?>