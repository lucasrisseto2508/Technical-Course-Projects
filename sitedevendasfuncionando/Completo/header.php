<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script type="text/javascript" src="script.js?2<$php echo time();?>"></script>

		<link rel="stylesheet" type="text/css" href="layout.css?2<$php echo time();?>"/>

	</head>
	<body>
		<header>
			<aside id="aLogin">
				<?php 
					session_start();
					if (!isset($_SESSION['nomeUsuario'])){
				?>
					<form id="formLogin">
						Login:<br/>
						<input type="text" id="txtLogin" name="txtLogin"/><br/>
						Senha:<br/>
						<input type="password" id="txtSenha" name="txtSenha"/><br/>
						<input type="button" id="btnLogin" value="Login"/>
					</form>
				<?php
					}else{
						echo 'Olá '.$_SESSION['nomeUsuario'].' <a href="#" id="logoff">Sair</a>';
					}
				?>
			</aside>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<?php 
					if (isset($_SESSION['funcaoUsuario'])){
						if($_SESSION['funcaoUsuario']=="ADM"){
				?>
						<li><a href="cadastroUsuarios.php">Usuários</a></li>
				<?php
						}
					}
				?>
				<li><a href="cadastroClientes.php">Clientes</a></li>
			</ul>
		</nav>
		<section>
			<?php include('conexao.php');?>