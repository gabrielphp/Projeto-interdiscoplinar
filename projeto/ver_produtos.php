<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>


	<?php
	include 'cabecalho.php';
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
	?>
		<div class='centro'>
			<div class='card'>
			<div class="card-body">
				<h2 class="texto">Produtos</h2>
				<?php 
					$consulta = "SELECT * FROM produtos";
					foreach ($conexao -> query($consulta) as $linha) {
						echo "<div class='card-body'>";
						echo "Produto: ". $linha['nome'] ."<br>";
						echo "Preço:".$linha['preco']."<br>";
						echo "</div>";
						echo "<hr>";
					}
					echo "</div";
					echo "<br>";

				?>
				<a href="paginaInicial.php" class="btn btn-secondary btn-lg btn-block">Voltar</a>
			</div>
			</div>
		</div>


</body>
</html>