<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	if ((!isset($_SESSION['id'])==true)&&
			(!isset($_SESSION['nome'])==true)&&
			(!isset($_session['email'])==true)) {
			unset($_SESSION['id']);
			unset($_SESSION['nome']);
			unset($_SESSION['email']);

			header('location:index.php');
	}
	include 'cabecalho.php';
	?>
	<form action="cadastrar_produtos_nf.php" method="POST"  class="form-group centro texto">
				<div class="card-header">
					<h1>Cadastrar produtos</h1>
				</div>
				<div class="card-body">
					<h4>Nome do produto:</h4>
					<input type="text" name="nome">
				</div>
				<hr>
				<div class="card-body">
					<h4>Preço do produto:</h4>
						
					<input type="int" name="preco">
				</div>
				<hr>
				<input type="submit" name="Enviar" value="Cadastrar" class="btn btn-primary">
	</form>

</body>
</html>