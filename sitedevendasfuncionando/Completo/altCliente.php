<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "aulaitq";

	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];

	$foto = addslashes(file_get_contents($_FILES['arquivo']['tmp_name']));
	
	// Create connection
	$conn = new mysqli($servidor, $usuario, $senha, $banco);
	// Check connection
	if ($conn->connect_error) {
	    die("Erro de conexão: " . $conn->connect_error);
	} 

	$sql = "UPDATE Clientes SET nome='$nome', endereco='$endereco', foto='$foto' WHERE codigo=$cod";
	$conn->query($sql);

	$conn->close();

	header("location: cadastroClientes.php");
?>