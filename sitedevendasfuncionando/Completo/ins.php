<?php
	include("conexao.php");

	$nome = $_POST['txtNome'];
	$preco = $_POST['txtPreco'];
	$qtde = $_POST['txtQuantidade'];
	$descricao = $_POST['txtDescricao'];
	$altura = $_POST['txtAltura'];
	$largura = $_POST['txtLargura'];
	$profundidade = $_POST['txtProfundidade'];
	$peso = $_POST['txtPeso'];
	$fabricante = $_POST['txtFabricante'];
	$codBarras = $_POST['txtCodBarras'];
	
	$foto = addslashes(file_get_contents($_POST['txtFoto']));

	$sql = "INSERT INTO Produtos VALUES (null, '$nome', '$preco', '$qtde', '$descricao', '$altura', '$largura', '$profundidade', '$peso', '$fabricante', '$codBarras', '$foto');";
	
	if ($conn->query($sql)) {
 	 	echo "Inserido com Sucesso!";
	}else{
		echo $conn->error;	
	}

	$conn->close();
?>