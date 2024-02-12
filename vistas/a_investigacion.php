<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si la sesión está iniciada
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header("Location: ../index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../librerias/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome.all.css">
	<title>investigacion</title>
</head>
<body>
	<?php include "menu.php";?>	
	<h1>AREA DE INVESTIGACION</h1>

	<h2>USUARIO ACTIVO</h2>
	<ol>
		<li><a href=""><?php echo $usuario;?></a></li>
		
	</ol>
</body>
</html>