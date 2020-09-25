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
	<title>Login</title>
</head>
<body>
	<div class="background centro">
		<div class="card  bg-dark" >
			<form action="processa.php" method="POST">
				<h2 class="card-body texto bg-dark" style="color:#ffffff">Forneça as suas informações</h2>
				<div class="card">
					<div class="card-header">
							<input type="text" class="btn btn-light btn-block btn-lg " style="margin-bottom: 3%; background-color: white;	" name="email" placeholder="email">
							<input type="password" class="btn btn-light btn-block btn-lg " style="background-color: white;" name="senha" placeholder="password"><br>
					</div>
				</div>
				<div class="card centro  bg-dark" style="border:none;">
					<input type="submit" name="adicionar" value="Login" class="btn btn-dark btn-block " >
				</div>
			</form>
		</div>
	</div>

</body>
</html>