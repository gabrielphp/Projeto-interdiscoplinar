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
$idProduto = $_POST['idProduto'];
$qtde = $_POST['qtdeProduto'];
$subTotal = $_POST['sub'];


echo "Nota Fiscal -=-=-". $nf ."<br>";
echo "Id do produto -=-=-". $idProduto ."<br>";
echo "Quantidade -=-=-". $qtde ."<br>";
echo "Subtotal -=-=-". $subTotal ."<br>";


$consulta = $conexao->prepare(
	"INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal)
	VALUES ('$idProduto', '$nf', '$qtde', '$subTotal')");
$consulta -> execute();
header('Location: confirma_item.php');



?>
