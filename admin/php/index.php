<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN | CFC - Picacho</title>
	<link rel="stylesheet" href="../style/admin.css">
	<link rel="stylesheet" href="../style/normalize.css">

	<!-- Pre-Carga (Pre-Load) de las Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>
<body>
	<div class="login">
		<div class="login__box">
			<img src="../img/logo.png">
			<div class="line"></div>
			<p>Iniciar Sesión</p>
			<?php

			if(isset($_REQUEST['login'])){
				session_start();
				$usuario=$_REQUEST['usuario'] ?? '';
				$clave=$_REQUEST['clave'] ?? '';
				$clave=md5($clave);

				include_once "conexion.php";

				$conn = mysqli_connect($host, $user, $pwd, $db);
         		//Crear la Consulta 
				$sql = "SELECT * FROM tb_admin WHERE usuario='" .$usuario."' and clave='" .$clave."'; ";
         		//Resultado de la Peticion de Consulta
				$result = mysqli_query($conn, $sql);
				$row= mysqli_fetch_assoc($result);

				if($row){
					$_SESSION['idadmin']=$row['idadmin'];
					$_SESSION['usuario']=$row['usuario'];
					$_SESSION['clave']=$row['clave'];

					header('location: panel.php');
					exit;
				}else{
					?>
					<div class="alert alert-danger" role="alert">
						<p>Error de Login</p>
					</div>
					<?php
				}
			}
			?>
			<form method="post">
				<div class="login__items">
					<input type="email" name="usuario" class="login__input" placeholder="Email">
					<span class="fas fa-envelope"></span>
				</div>
				<div class="login__items">
					<input type="password" name="clave" class="login__input" placeholder="Password">
					<span class="fas fa-lock"></span>
				</div>
				<div class="login__submit">
					<button type="submit" name="login">INGRESAR</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
 ob_end_flush();
?>
