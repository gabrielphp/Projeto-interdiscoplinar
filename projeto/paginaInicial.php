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
	<title>Página Inicial</title>
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
			<div class="card">
				<div class="card-body texto" >
					<p>Ao clicar em INICIAR VENDA, o sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total.<br>Na próxima tela será solicitada a data da NF.<br>O valor total será atualizado após a inserção dos itens de nota fiscal.
					</p>
				</div>
				<div class="card-header texto">
					<div style="text-align: center;">
						<h3>Iniciar uma nova venda</h3>
					</div>
					<div class="texto">
						<form action="data_nf.php" method="post" class="form-group centro">

							<button class="btn btn-dark" type="submit">Começar</button>

						</form>
					</div>
				</div>
				</div>
			
			</div>
				<hr>
				<section id="especial">
					<div>
						<button type="button" class="btn btn-dark btn-lg btn-block" ><a href="ver_nf.php" style="text-decoration: none;">Ver notas emitidas</a></button>
					</div>
					<div>
						<button type="button" class="btn btn-dark btn-lg btn-block"><a href="ver_produtos.php" style="text-decoration: none;">Ver produtos</a></button>
					</div>
					<div >
						<button type="button" class="btn btn-dark btn-lg btn-block"><a href="cadastrar_produtos.php" style="text-decoration: none;">Cadastrar produtos</a></button>
					</div>
				</section>
			
	
</body>
</html>