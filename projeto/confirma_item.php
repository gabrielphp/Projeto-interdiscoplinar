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
	<title>Revisão</title>
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
		include 'cabecalho.php'
		?>
		<div class="centro">
			<div class="card">
			<?php 
			include 'conecta.php';
			$nf = $_SESSION['nf'];

			$consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

			echo "
					<div class='card'>
						<div class='card-body'>
							<h4>Código da nota fiscal - 
							".$nf."
							</h4> 
						</div>
					</div>";

			$total = 0;
			echo "<div class='card-body'>";

			foreach ($conexao -> query($consulta) as $linhaAtual) {
				echo "<div class='card-body'>
							<h5>";
				echo "Código do produto: ". $linhaAtual['cod_produto']. "<br>";
				echo "</h5>
				</div>";
				echo "<div class='card-body'>
							<h5>";
				echo "Quantidade: ".$linhaAtual['qtde'] ."<br>";
				echo "</h5>
				</div>";
				echo "<div class='card-body'>
							<h5>";
				echo "Subtotal: ".$linhaAtual['subtotal'] ."<br>";
				echo "</h5>
				</div>";
				$total = $total + $linhaAtual['subtotal'];
				echo "<hr>";
			}
			echo "</div>";
			echo "<div class='card' style='background-color:transparent;'><div class='card-header'><h4> <span>Total: ". $total."</h4></span></div></div>";

			?>
		</div>

		<div class="card centro" style="background-color: transparent; border:none;">
			<h5><a href="seleciona_ultima_nf.php" class="btn btn-dark" style="text-transform: 0.7em">Inserir novo produto</a></h5>
			<h5><a href="finalizar.php?total=<?php echo $total; ?>" class="btn btn-dark">Finalizar nota fiscal</a></h5>
		</div>
	


</body>
</html>