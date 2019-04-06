<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
    <h1> 
        ¡Bienvenido seas voj!
    </h1>
  </article>
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>