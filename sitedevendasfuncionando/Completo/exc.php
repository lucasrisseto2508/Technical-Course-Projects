<?php
	include("conexao.php");

	$codigo = $_POST['codigo'];

	$sql = "DELETE FROM Produtos WHERE codigo = $codigo;";
	
	if ($conn->query($sql)) {
 	 	echo "Excluído com Sucesso!";
	}else{
		echo $conn->error;	
	}

	$conn->close();
?>