<?php 

	include 'conecta.php';
	session_start();

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];

	$consulta = "SELECT * FROM produtos";
	$consulta = $conex->prepare("INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')");
	$consulta -> execute();
	
	header('Location: verProdutos.php');
		
	
?>