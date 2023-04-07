<?php
	include("header.php");

	if (isset($_SESSION['funcaoUsuario'])){
		if($_SESSION['funcaoUsuario']=="ADM"){
			
			echo "Cadastro de Usuários";
		}else{
			echo "Você não possui permissão para acessar essa página!";
		}
	}else{
		header("location:index.php");
	}


	include("footer.php");
?>