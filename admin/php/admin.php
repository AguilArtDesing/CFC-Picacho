<!-- ADMINISTRATOR -->
<?php
include_once 'conexion.php';
$conn = mysqli_connect($host, $user, $pwd, $db);

if(isset($_SESSION['idadmin'])==false){
  header('location: index.php');
}
?>

<!-- INICIO | Value Admin -->
<div class="admin">
    <div class="box"></div>
    <div class="admin__content">
        <h2>USUARIO <span>/</span> ADMINISTRADOR</h2>
        <div class="admin__table">
            <?php
            include_once "conexion.php";
            $conn=mysqli_connect($host, $user, $pwd, $db);
            $idadmin = $_SESSION['idadmin'];
            $sql = "SELECT * FROM tb_admin WHERE idadmin = '".$idadmin."';";
            $result=mysqli_query($conn,$sql);

                //estructura bucle while
            while ($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="admin__item">
                    <p class="admin__item-h">Nombre de Usuario</p>
                    <p class="admin__item-b"> <?php echo $row['nombre']?></p>
                </div>
                <div class="admin__item">
                    <p class="admin__item-h">Correo Electrónico</p>
                    <p class="admin__item-b"><?php echo $row['usuario']?></p>
                </div>
                <div class="admin__item">
                    <p class="admin__item-h">Editar Usuario</p>
                    <p class="admin__item-b"><a href="panel.php?modulo=editardatos&idadmin=<?php echo $row['idadmin']?>"><i class="fas fa-user-edit" title="Editar usuario"></i></a></p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- FIN | Value Admin -->

<!-- INICIO | Suscriptores -->
<div class="suscritos">
    <div class="box"></div>
    <div class="suscritos__content">
        <h2>SOLICITUD <span>DE</span> PROGRAMA</h2>
        <div class="suscritos__box">
        <?php
        include_once "conexion.php";
        $conn=mysqli_connect($host, $user, $pwd, $db);
        $sql="SELECT * FROM tb_programs;";
        $result=mysqli_query($conn,$sql);
        ?>
        <?php
                //estructura bucle while
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="suscritos__table">
                <div class="suscritos__table-box">
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Fecha</p>
                        <p class="suscritos__table-b"><?php echo $row['fecha']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Nombres / Apellidos</p>
                        <p class="suscritos__table-b"><?php echo $row['nombres']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Correo Electrónico</p>
                        <p class="suscritos__table-b"><?php echo $row['email']?></p>
                    </div>
                </div>
                <div class="suscritos__table-box">
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Teléfono</p>
                        <p class="suscritos__table-b"><?php echo $row['telefono']?></p>
                    </div> 
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Programa</p>
                        <p class="suscritos__table-b"><?php echo $row['opcion']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Semana</p>
                        <p class="suscritos__table-b"><?php echo $row['semana']?></p>
                    </div>
                </div>
                <div class="suscritos__coment">
                    <p class="suscritos__table-h">Comentario</p>
                    <p class="suscritos__table-b"><?php echo $row['comentario']?></p>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
    </div>
</div>
<!-- FIN | Suscriptores -->

<!-- INICIO | Suscriptores -->
<div class="suscritos">
    <div class="box"></div>
    <div class="suscritos__content">
        <h2>MENSAJES <span>DE</span> CONTACTO</h2>
        <div class="suscritos__box">
        <?php
        include_once "conexion.php";
        $conn=mysqli_connect($host, $user, $pwd, $db);
        $sql="SELECT * FROM tb_contact;";
        $result=mysqli_query($conn,$sql);
        ?>
        <?php
                //estructura bucle while
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="suscritos__table">
                <div class="suscritos__table-box">
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Fecha</p>
                        <p class="suscritos__table-b"><?php echo $row['fecha']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Nombres</p>
                        <p class="suscritos__table-b"><?php echo $row['nombres']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Apellidos</p>
                        <p class="suscritos__table-b"><?php echo $row['apellidos']?></p>
                    </div>
                </div>
                <div class="suscritos__table-box">
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Correo Electrónico</p>
                        <p class="suscritos__table-b"><?php echo $row['email']?></p>
                    </div> 
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Teléfono</p>
                        <p class="suscritos__table-b"><?php echo $row['telefono']?></p>
                    </div>
                    <div class="suscritos__table-item">
                        <p class="suscritos__table-h">Opción</p>
                        <p class="suscritos__table-b"><?php echo $row['opcion']?></p>
                    </div>
                </div>
                <div class="suscritos__coment">
                    <p class="suscritos__table-h">Comentario</p>
                    <p class="suscritos__table-b"><?php echo $row['comentario']?></p>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
    </div>
</div>
<!-- FIN | Suscriptores -->        