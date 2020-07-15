<?php

	session_start();
	include("conexao.php");
	
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
	$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
	
	$sql = "SELECT COUNT(*) AS total FROM usuarios WHERE usuario = '$usuario'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$sql = "INSERT INTO usuarios (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";
	
	if ($conexao->query($sql) === true) {
		$_SESSION['cadastro'] = true;
	}
	
	$conexao->close();
	
	header('Location: cadastro.php');
	exit;