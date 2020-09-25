<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include 'cabecalho.php'
	?>
	
		<div class='centro'>
			<div class='card'>
			<div class="card-header">
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

					$consulta = "SELECT * FROM nota_fiscal";
				

					foreach ($conexao -> query($consulta) as $linhaAtual) {
						echo "<div class='card-body texto'>
							<h6>";
						echo "Nota Fiscal: ".$linhaAtual['nf']." - Data: ".$linhaAtual['data']. " - Valor total: ".$linhaAtual['valor_total'];
						echo "</h6>
							</div>";

						$nota = $linhaAtual['nf'];
						$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
						
						foreach ($conexao -> query($consulta2) as $linhaAtual2) {
							echo "<div class='card-header'>";
							echo "ID: ". $linhaAtual2['id'] ."<br>";
							echo "Código do produto:".$linhaAtual2['cod_produto']."<br>";
							$codigo =$linhaAtual2['cod_produto'];
							$consulta3 = "SELECT * FROM produtos WHERE id='$codigo'";
							foreach ($conexao -> query($consulta3) as $linhaAtual3) {
								echo "Produto: ".$linhaAtual3['nome']."<br>";
								echo "Valor unitário: ".$linhaAtual3['preco']."<br>";
							}

							echo "Quantidade: ".$linhaAtual2['qtde']."<br>";
							echo "Sub total: ".$linhaAtual2['subtotal']."<br>";
							echo "</div>";
						}
						
						echo "<hr>";

					}
					echo "</div";
					echo "<br>";

				?>
				<a href="paginaInicial.php" class="btn btn-secondary btn-lg btn-block">Voltar</a>
			</div>
		</div>


</body>
</html>





