<?php
	include("conexao.php");

	$codigo = $_POST["txtCodigo"];
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

	$sql = "UPDATE Produtos SET nome = '$nome', preco = '$preco', quantidade = '$qtde', descricao = '$descricao', altura = '$altura', largura = '$largura', profundidade = '$profundidade', peso = '$peso', fabricante = '$fabricante', codigoDeBarras = '$codBarras', foto = '$foto' WHERE codigo = $codigo";
	$conn->query($sql);

	$conn->close();

	header("location: index.php");
?>