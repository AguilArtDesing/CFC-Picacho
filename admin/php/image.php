<?php
require_once('conexion.php');
$conn =mysqli_connect($host, $user, $pwd, $db);

if(isset($_SESSION['idadmin'])==false){
    header('location: index.php');
}

if (isset($_REQUEST['guardar'])) {
	if (isset($_FILES['foto']['name'])) {
		$tipoArchivo = $_FILES['foto']['type'];
		$permitido=array("image/png","image/jpeg");
		if( in_array($tipoArchivo,$permitido) ==false ){
			die("Archivo no permitido");
		}
		$nombreArchivo = $_FILES['foto']['name'];
		$tamanoArchivo = $_FILES['foto']['size'];
		$imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
		$binariosImagen = fread($imagenSubida, $tamanoArchivo);
		//include_once "conexion.php";
		//$con = mysqli_connect($host, $user, $pwd, $db);
		$binariosImagen = mysqli_escape_string($conn, $binariosImagen);
		$query = "INSERT INTO tb_galeria (nombre            ,foto                 ,tipo) values 
		('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');
		";
		$res = mysqli_query($conn, $query);
	}
}
if(isset($_REQUEST['idBorrar'])){
	//include_once "conexion.php";
	//$conn = mysqli_connect($host, $user, $pwd, $db);
 	$idgaleria=mysqli_real_escape_string($conn,$_REQUEST['idBorrar']??'');
  //instruccion para eliminar con lenguaje sql
  	$sql="DELETE FROM tb_galeria WHERE idgaleria='".$idgaleria."';";
  	$res=mysqli_query($conn,$sql);
}
?>

<div class="admin">
    <div class="box"></div>
    <div class="admin__content">
    	<h2>SUBIR <span>UNA</span> IMAGEN</h2>
    	<form method="post" enctype="multipart/form-data" class="admin__table form__box">
    		<div class="admin__item">
    			<input type="file" name="foto">
    		</div>
    		<div class="admin__item">
    			<button type="submit" name="guardar">SUBIR IMAGEN</button>
    		</div>
    	</form>
    </div>
</div>


<div class="suscritos">
	<div class="box"></div>
	<div class="suscritos__content">
		<h2>IMAGENES <span>DE</span> GALERIA</h2>
		<div class="suscritos__box">
			<?php
			include_once "conexion.php";
			$conn = mysqli_connect($host, $user, $pwd, $db);
			$query = "SELECT idgaleria,nombre,tipo,foto FROM tb_galeria;";
			$res = mysqli_query($conn, $query);

			while ($row = mysqli_fetch_assoc($res)) {
				?>
				<div class="suscritos__table">
					<div class="suscritos__table-box gallery__image">
						<div class="suscritos__table-item">
							<p class="suscritos__table-h">Nombre de Imagen</p>
							<p class="admin__item-b"> <?php echo $row['nombre']?></p>
						</div>
						<div class="suscritos__table-item">
							<p class="suscritos__table-h">Tipo de Imagen</p>
							<p class="admin__item-b"><?php echo $row['tipo']?></p>
						</div>
						<div class="suscritos__table-item">
							<p class="suscritos__table-h">Foto</p>
							<div>
								<img width="180px" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['foto']); ?>">
								<a href="panel.php?modulo=image&idBorrar=<?php echo $row['idgaleria'];?>"><i class="fas fa-trash-alt delete__image"></i></a>
							</div>	
						</div>
					</div>
				</div>
				<?php
			}
			?>          
		</div>
	</div>
</div>

