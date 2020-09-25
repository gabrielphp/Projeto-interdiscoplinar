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
	<title>Adicionar data</title>
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
		<div class="centro centroItens">
			<?php 
				include 'conecta.php';


				$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
				$consulta = $conexao->query($consulta);
				$linhaAtual = $consulta->fetch_assoc();
				$ultimoRegis = $linhaAtual['ultima'];


				
				$_SESSION['nf'] = $ultimoRegis;
			?>

		
			
				<form action="insere_item.php?nf='<?php echo $ultimoRegis; ?>'" method="post">
					<div class="card">
						<div class="card-body">
							<h4>Código da nota fiscal - 
							<a name="nf"> <?php echo $ultimoRegis; ?></a>
							</h4> 
						</div>
					</div>
					<div class="card card-header">
						<div class="card-body">
							<h4>Produto:
						
							<select name="produtoOpcao" id="produtoOpcao" class="custom-select " style="position:relative;">
								<?php 
									$consulta = "SELECT * FROM produtos";
									foreach ($conexao -> query($consulta) as $linhaAtual) {
									?>
									<option
									value="<?php echo $linhaAtual['id']; ?>">
									<?php echo $linhaAtual['nome'];?>
									</option>
									<?php
									}
									?>
							</select>
							</h4> 
						</div>

						<div class="card-body">
							<h4>Quantidade:</h4>
						
							<input type="text" name="qtde">
						</div>
						<hr>

						<div class="card centro" style="background-color: transparent; border:none;">
							<input type="submit" name="Continuar" value="Enviar" class="btn btn-dark" style="margin-top: 1%;">
						</div>
						</div>
				</form>

			
		
		</div>



</body>
</html>