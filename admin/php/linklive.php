<!-- ADMINISTRATOR -->
<?php
include_once 'conexion.php';
$conn = mysqli_connect($host, $user, $pwd, $db);

if(isset($_SESSION['idadmin'])==false){
  header('location: index.php');
}
?>
<!-- INICIO | Suscriptores -->
<div class="admin">
    <div class="box"></div>
    <div class="admin__content">
        <h2>LINK <span>/</span> LIVE YOUTUBE</h2>
        <div class="admin__table">
        <?php
        include_once "conexion.php";
        $conn=mysqli_connect($host, $user, $pwd, $db);
        $sql="SELECT * FROM tb_live;";
        $result=mysqli_query($conn,$sql);
        ?>
        <?php
                //estructura bucle while
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="admin__item link__live">
            	<p class="admin__item-h">Link Actual</p>
            	<p class="admin__item-b"><?php echo $row['enlace']?></p>
            </div>
            <div class="admin__item link__live">
            	<p class="admin__item-h">Actualizar</p>
            	<p class="admin__item-b"><a href="panel.php?modulo=editardatos&idlive=<?php echo $row['idlive']?>"><i class="fas fa-user-edit" title="Editar usuario"></i></a></p>
            </div>
            <?php
        }
        ?>
        </div>
        <div class="preview">
        	<?php
			include_once "conexion.php";
			$con = mysqli_connect($host, $user, $pwd, $db);
			$query = "SELECT enlace FROM tb_live;";
			$res = mysqli_query($con, $query);
			while ($row = mysqli_fetch_assoc($res)) {
				?>
				<iframe width="560" height="315" src="<?php echo $row['enlace'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<?php
			}
			?>
        
        </div>
    </div>
</div>
<!-- FIN | Suscriptores -->

