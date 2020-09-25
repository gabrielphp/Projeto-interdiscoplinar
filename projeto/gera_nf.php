<?php 
	include 'conecta.php';
	session_start();
	if ((!isset($_SESSION['id'])==true)&&
		(!isset($_SESSION['nome'])==true)&&
		(!isset($_session['email'])==true)) {
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['email']);

		header('location:index.php');
	}
	$dataAtual = $_POST['data'];
	$consulta = $conexao -> prepare("INSERT INTO nota_fiscal (data) VALUES ('$dataAtual')");
	$consulta -> execute();
	header('Location: seleciona_ultima_nf.php');
?>