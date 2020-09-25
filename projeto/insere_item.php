<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-to-fit=no">
	<title>Item da nota fiscal</title>
</head>
<body>

	<?php 
		include 'cabecalho.php';
		session_start();
		if ((!isset($_SESSION['id'])==true)&&
		(!isset($_SESSION['nome'])==true)&&
		(!isset($_session['email'])==true)) {
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['email']);

		header('location:index.php');
	}
	?>
		<div class="centro">
			<?php 
				include 'conecta.php';
				
				$nf = $_SESSION['nf'];
				echo'<div class="card">';
				echo "
					<div class='card'>
						<div class='card-body'>
							<h4>Código da nota fiscal - 
							".$nf."
							</h4> 
						</div>
					</div>";

				$idProduto = $_POST['produtoOpcao'];
				$qtdeProduto = $_POST['qtde'];

				$consulta = "SELECT preco,nome FROM produtos WHERE id='$idProduto'";
				$consulta = $conexao->query($consulta);
				$linha = $consulta->fetch_assoc();

				$preco = $linha['preco'];
				$nome = $linha['nome'];

				$sub = $preco * $qtdeProduto;

			?>
				<div class="card">
					<form action="insere_item_nf.php" method="POST">
						<div class="card-body">
							<h4>Id do produto:
							<input type="text" name="idProduto" value="<?php echo $idProduto; ?>" style="border:none" reandonly="reandonly">
							</h4>
						</div>
						<div class="card-body">
							<h4>Produto:
							<input type="text" name="nomeProduto" value="<?php echo $nome; ?>"  style="border:none" reandonly="reandonly"></h4>
						</div>
						<div class="card-body">
							<h4>Valor unitário:
							<input type="text" name="uniValorProduto" value="<?php echo $preco; ?>" style="border:none" reandonly="reandonly"></h4>
						</div>
						<div class="card-body">
							<h4>Quantidade:
							<input type="text" name="qtdeProduto" value="<?php echo $qtdeProduto; ?>" style="border:none" reandonly="reandonly"></h4>
						</div>
						<div class="card-body">
							<h4>Subtotal:
							<input type="text" name="sub" value="<?php echo $sub; ?>" style="border:none" reandonly="reandonly"></h4>
						</div>
						<div class="card centro" style="background-color: transparent; border:none;">
							<input type="submit" name="Adicionar produto" value="Adicionar produto"class="btn btn-dark" >
						</div>
					</form>
				</div>
		</div>
	
</body>
</html>