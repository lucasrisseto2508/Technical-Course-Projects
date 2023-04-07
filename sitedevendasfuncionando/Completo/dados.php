<html>
<head></head>
<body>
	<?php
		$erro = "não";
		if (isset($_GET["codigo"])){

		 	include('conexao.php');

			$sql = "SELECT * FROM Produtos WHERE codigo = ".$_GET["codigo"];
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				
			    if($row = $result->fetch_assoc()) {
			    	$codigo = $row['codigo'];
			    	$nome = $row['nome'];
			    	$preco = $row['preco'];
			    	$qtde = $row['quantidade'];
					$descricao = $row['descricao'];
					$altura = $row['altura'];
					$largura = $row['largura'];
					$profundidade = $row['profundidade'];
					$peso = $row['peso'];
					$fabricante = $row['fabricante'];
					$codBarras = $row['codigoDeBarras'];

			   		$pagina = "alt.php";
				}
			}else{
				$erro = "sim";
			}
		}else{
			$codigo = "";
	    	$nome = "";
	    	$preco = "";
	    	$qtde = "";
			$descricao = "";
			$altura = "";
			$largura = "";
			$profundidade = "";
			$peso = "";
			$fabricante = "";
			$codBarras = "";

			$pagina = "ins.php";
		}

		if ($erro == "não"){
			echo '<form action="'.$pagina.'" method="post" enctype="multipart/form-data">';
			echo '  <input type="hidden" name="txtCodigo" value="'.$codigo.'"/>';
			echo '	Nome:<br/>';
			echo '	<input type="text" name="txtNome" value="'.$nome.'"/><br/>';
			echo '	Preço:<br/>';
			echo '	<input type="text" name="txtPreco" value="'.$preco.'"/><br/>';
			echo '	Quantidade:<br/>';
			echo '	<input type="text" name="txtQuantidade" value="'.$qtde.'"/><br/>';
			echo '	Descrição:<br/>';
			echo '	<input type="text" name="txtDescricao" value="'.$descricao.'"/><br/>';
			echo '	Altura:<br/>';
			echo '	<input type="text" name="txtAltura" value="'.$altura.'"/><br/>';
			echo '	Largura:<br/>';
			echo '	<input type="text" name="txtLargura" value="'.$largura.'"/><br/>';
			echo '	Profundidade:<br/>';
			echo '	<input type="text" name="txtProfundidade" value="'.$profundidade.'"/><br/>';
			echo '	Peso:<br/>';
			echo '	<input type="text" name="txtPeso" value="'.$peso.'"/><br/>';
			echo '	Fabricante:<br/>';
			echo '	<input type="text" name="txtFabricante" value="'.$fabricante.'"/><br/>';
			echo '	Código de Barras:<br/>';
			echo '	<input type="text" name="txtCodBarras" value="'.$codBarras.'"/><br/>';
			echo '	Foto:<br/>';
			echo '	<input type="file" name="foto"/><br/>';
			echo '	<input type="submit" name="btnEnviar">';
			echo '</form>';
		}else{
			echo "Produto Inválido!";
		}
	?>
</body>
</html>