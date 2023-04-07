	<?php
		include('header.php');
		if(isset($_GET['codigo'])){

			$sql = "SELECT * FROM Clientes WHERe codigo =".$_GET['codigo'];
			$result = $conn->query($sql);

			if ($row = $result->fetch_assoc()) {
			    echo '<form action="altCliente.php" enctype="multipart/form-data" method="post">';
			    echo '	<input type="hidden" name="codigo" value="'.$row["codigo"].'"><br/>';
				echo '	Nome:<br/>';
				echo '	<input type="text" name="nome" value="'.$row["nome"].'"><br/>';
				echo '	Endereço:<br/>';
				echo '	<input type="text" name="endereco" value="'.$row["endereco"].'"><br/>';
				echo '  <img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" style="width:40px;height:40px;"/><br/>';
				echo '  Selecione uma imagem: <input name="arquivo" type="file" /><br/>';
				echo '	<input type="submit"/><br/>';
				echo '</form>';
			}else {
			    echo "Erro! Não existe esse cliente!";
			}
			$conn->close();
	}else{
		echo '<form action="insCliente.php" enctype="multipart/form-data" method="post">';
		echo '	Nome:<br/>';
		echo '	<input type="text" name="nome"/><br/>';
		echo '	Endereço:<br/>';
		echo '	<input type="text" name="endereco"/><br/>';
		echo '  Selecione uma imagem: <input name="arquivo" type="file" /><br/>';
		echo '	<input type="submit"/><br/>';
		echo '</form>';
	}

	include('footer.php');
	?>
