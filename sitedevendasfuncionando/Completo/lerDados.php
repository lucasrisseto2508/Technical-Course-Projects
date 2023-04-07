<?php
	include('conexao.php');

	$sql = "SELECT * FROM Produtos WHERE codigo = ".$_POST["codigo"];
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {	
	    if($row = $result->fetch_assoc()) {
	    	echo $row['codigo'] . "|" . $row['nome'] . "|" . $row['preco']. "|" . $row['quantidade']. "|" . $row['descricao']. "|" . $row['altura']. "|" . $row['largura']. "|" . $row['profundidade']. "|" . $row['peso']. "|" . $row['fabricante']. "|" . $row['codigoDeBarras']. "|" . base64_encode($row['foto']);
		}
	}
?>