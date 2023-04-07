
		
			<?php
				include('header.php');

				$sql = "SELECT * FROM Produtos";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

				    while($row = $result->fetch_assoc()) {
						echo '<div class="card">';
						echo '  <img src="data:image/jpeg;base64,'.base64_encode($row['foto']).'" alt="Foto do Produto" class="foto">';
						echo '  <h1>'.$row["nome"].'</h1>';
						echo '  <p class="preco">'.$row["preco"].'</p>';
						echo '  <p class="descricao">'.$row["descricao"].'</p>';
						echo '  <p><button>Add to Cart</button></p>';
						echo '  <a href="#" codAlterar="'.$row["codigo"].'" class="btnAlterar"><img src="editar.png?'.time().'" class="editar"/></a>';
						echo '  <a href="#" codExcluir="'.$row["codigo"].'" class="btnExcluir"><img src="excluir.png" class="excluir"/></a>';
						echo '</div>';
					}

				} else {
				    echo "Não existe produtos cadastrados!";
				}
				$conn->close();
			?>
		
			<a href="#" class="inserir">+</a>

			<div id="boxes">
		 		<!-- Janela Modal -->
				<div id="dialog">
					<form id="formCadastro">
						<input type="hidden" id="txtCodigo" name="txtCodigo"/>
						Nome:<br/>
						<input type="text" id="txtNome" name="txtNome"/><br/>
						Preço:<br/>
						<input type="text" id="txtPreco" name="txtPreco"/><br/>
						Quantidade:<br/>
						<input type="text" id="txtQuantidade" name="txtQuantidade"/><br/>
						Descrição:<br/>
						<input type="text" id="txtDescricao" name="txtDescricao"/><br/>
						Altura:<br/>
						<input type="text" id="txtAltura" name="txtAltura"/><br/>
						Largura:<br/>
						<input type="text" id="txtLargura" name="txtLargura"/><br/>
						Profundidade:<br/>
						<input type="text" id="txtProfundidade" name="txtProfundidade"/><br/>
						Peso:<br/>
						<input type="text" id="txtPeso" name="txtPeso"/><br/>
						Fabricante:<br/>
						<input type="text" id="txtFabricante" name="txtFabricante"/><br/>
						Código de Barras:<br/>
						<input type="text" id="txtCodBarras" name="txtCodBarras"/><br/>
						Foto:<br/>
						<input type="file" id="fileFoto"/><br/>
						<img src="data:image/jpeg;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" id="imgFoto"/>
						<input type="hidden" name="txtFoto" id="txtFoto"/>
						<input type="button" id="btnEnviar" value="Enviar">
					</form>				
				</div>
				<!-- Fim Janela Modal-->
				<!-- Máscara para cobrir a tela -->
				<div id="mask"></div>
			</div>
		<?php include("footer.php"); ?>