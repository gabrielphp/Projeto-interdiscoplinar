<?php 
session_start();

include 'conecta.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$consul = "SELECT * from usuarios where email = '$email' and senha = '$senha'";
$resul = $conexao->query($consul);
$regis = $resul->num_rows;
$resulUsu = mysqli_fetch_assoc($resul);
if ($regis != 0){
	$_SESSION['id'] = $resulUsu['id'];
	$_SESSION['nome'] = $resulUsu['nome'];
	$_SESSION['email'] = $resulUsu['email'];
	header('location:restrita.php');
} else {
	header('location: index.php'); 
}

?>