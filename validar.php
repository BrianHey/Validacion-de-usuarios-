<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	
</head>
</head>
<body>
		<?php
			include 'conexion.php';
			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$password = $_POST['password'];
				$login = mysql_query("SELECT * FROM admin WHERE user='$usuario' AND pw='$password'");
				if (mysql_num_rows($login)>0) {
					$row = mysql_fetch_array($login);
					$_SESSION["user"] = $row['user']; 
				  	echo 'Iniciando sesión para '.$_SESSION['user'];
					echo '<script> window.location="panel.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>