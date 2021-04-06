<?php
 session_start();
 //cerrar sesion
 session_regenerate_id(true);

 //recarga el id de la sesion, como un random para evitar el sucuestro de la sesion del usuario final
 if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="salir"){
   session_destroy();
   header("Location: index.php");
 }


 if(isset($_SESSION['idadmin'])==false){
   header('location: index.php');
 }

 $modulo = $_REQUEST['modulo'] ?? '';
?>

<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO | CFC - Picacho</title>

	<!-- Pre-Carga (Pre-Load) de los CSS -->
	<link rel="preload" href="../style/normalize.css" as="style">
	<link rel="stylesheet" href="../style/normalize.css">
	<link rel="preload" href="../style/admin.css" as=style>
	<link rel="stylesheet" href="../style/admin.css">

	<!-- Pre-Carga (Pre-Load) de las Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 

	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
	
	<!-- INICIO | Header -->
	<div class="header">
		<div class="header__button">
			<button class="button__box" type="button"><a href="panel.php?modulo=&sesion=salir" title="Salir"><i class="fas fa-sign-out-alt"></i></a></button>
			<span class="header__name">Salir</span>
		</div>
		<img src="../img/logo.svg" alt="Centro Familiar Cristiano | Picacho" class="header__logo">
		<div class="header__options">
			<h2>Panel de Control</h2>
		</div>
	</div>
	<!-- FIN | Header -->

	<!-- INICIO | Sidebar -->
	<div class="sidebar">
		<div class="sidebar__nav-box"></div>
		<div class="sidebar__nav-ref">
			<div class="nav__ref-box">
				<div class="ref__box-option">
					<a href="panel.php?modulo=admin" class="option <?php echo ($modulo=="admin" || $modulo=="editardatos")? " active ":" ";?>" title="Usuarios"><i class="fas fa-users"></i></a>
					<span>Usuarios</span>
					<div class="line"></div>
				</div>
				<div class="ref__box-option">
					<a href="panel.php?modulo=linklive" class="option <?php echo ($modulo=="linklive")? " active":" ";?>" title="Ubicanos"><i class="fab fa-youtube"></i></a>
					<span>Live</span>
					<div class="line"></div>
				</div>
				<div class="ref__box-option">
					<a href="panel.php?modulo=image" class="option <?php echo ($modulo=="image")? " active":" ";?>" title="Whatsapp"><i class="fas fa-images"></i></a>
					<span>Galeria</span>
					<div class="line"></div>
				</div>
			</div>	
		</div>
	</div>
	<!-- FIN | Sidebar -->
	
	<?php
    //Admin
	if($modulo =="admin"){
		include_once "admin.php";
	}
	if($modulo =="editardatos"){
		include_once "editardatos.php";
	}
	if ($modulo=="image"){
		include_once "image.php";
	}
	if ($modulo=="linklive"){
		include_once "linklive.php";
	}
	?>
</body>
</html>