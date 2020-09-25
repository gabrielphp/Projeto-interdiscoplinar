<?php 
include 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data da nota fiscal</title>
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
			<div class="card">
			  <div class="card-body">
			  <h5 class="card-title">Insira a data</h5>
			    
			  
				<form action="gera_nf.php" method="post">
					
					<input type="date" name="data">
					</div>					
					</div>
					<div class="card centro" style="background-color: transparent; border:none;">
						<input type="submit" name="Continuar" value="Enviar" class="btn btn-dark" style="margin-top: 1%;">				
					</div>
				</form>
		</div>

</body>
</html>