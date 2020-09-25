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
	$nf = $_SESSION['nf'];
	$total = $_GET['total'];
	echo "Nota Fiscal: ". $nf ."<br>";
	echo "Total:". $total ."<br>";

	$consulta = $conexao -> prepare(
		"UPDATE nota_fiscal SET valor_total ='$total' WHERE nf = '$nf'"
	);
	$consulta -> execute();

	header('Location: paginaInicial.php');
?>