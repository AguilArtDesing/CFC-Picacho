<?php
include_once 'conexion.php';
$conn = mysqli_connect($host, $user, $pwd, $db);

if(isset($_SESSION['idadmin'])==false){
  @header('location: index.php');
}
?>
<?php
include("conexion.php");
if (isset($_POST["enviar"])) {
	if (strlen($_POST["nombres"])   >= 1 &&
		strlen($_POST["email"])     >= 1 &&
		strlen($_POST["telefono"])  >= 1 &&
		strlen($_POST["opcion"])    >= 1 &&
		strlen($_POST["semana"])    >= 1) {

		$nombres = trim($_POST["nombres"]);
		$email = trim($_POST["email"]);
		$telefono = trim($_POST["telefono"]);
		$opcion = trim($_POST["opcion"]);
		$semana = trim($_POST["semana"]);
		$comentario = trim($_POST["comentario"]);
		$fecha = date("d/m/y");

		$consulta = "INSERT INTO tb_programs(nombres, email, telefono, opcion, semana, comentario, fecha) VALUES ('$nombres','$email','$telefono','$opcion','$semana','$comentario','$fecha')";
		$conn = mysqli_connect($host, $user, $pwd, $db);
		$result = mysqli_query($conn,$consulta);
	}
}
?>