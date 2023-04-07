	<?php
		include("header.php");

		$sql = "SELECT * FROM Clientes";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table border='1'><tr><td>Código</td><td>Nome</td><td>Endereco</td><td></td><td></td></tr>";

		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr>";
		        echo "<td>". $row["codigo"]. "</td>";
		        echo "<td>". $row["nome"]. "</td>";
		        echo "<td>". $row["endereco"]. "</td>";
		       	//echo "<td><a href='img.php?id=".$row['codigo']."''>teste</a></td>";
		        echo "<td><img src='data:image/jpeg;base64,".base64_encode($row['foto'])."' style='width:20px;height:20px;'/></td>";
		        echo "<td><a href='dadosCliente.php?codigo=".$row["codigo"]."'><img src='editar.png' style='width:20px;height:20px;'/></a></td>";
		        echo "<td><a href='excCliente.php?codigo=".$row["codigo"]."'><img src='excluir.png' style='width:20px;height:20px;'/></a></td>";
		        echo "</tr>";
		    }

		    echo "</table>";
		} else {
		    echo "0 resultados";
		}
		$conn->close();
		echo '<br/>';
		echo '<a href="dadosCliente.php">Inserir</a>';

		include('footer.php');
	?>
	
