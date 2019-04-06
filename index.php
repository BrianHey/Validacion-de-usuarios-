<?php
	session_start();
	include 'conexion.php';
	//if (isset($_SESSION['user'])) {
	//	echo '<script> window.location="panel.php"; </script>';
	//} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>login</title>
	<meta charset="utf-8">
	<!-- <script src="validar.js"></script> -->
</head>
<body class="container">
			<center><h1 class="h1" style="color:blue">Login</h1>
			<form method="post" action="validar.php" >
				<input type="text"  name="user" autocomplete="off" required><br><br>
				<input type="password" name="password" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Entrar">
			</form></center>
</body>
</html>

<?php 
		if(isset($_SESSION['user'])){
			echo '<h1> Hablame </h1>';
			echo '<a href="logout.php"><button>Salir</button></a>';
	}
	
 ?>
