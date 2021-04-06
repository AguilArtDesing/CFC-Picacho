<?php
require_once('conexion.php');
$conn =mysqli_connect($host, $user, $pwd, $db);

if(isset($_SESSION['idadmin'])==false){
    header('location: index.php');
}

if(isset($_REQUEST['editar'])){
    $nombre=mysqli_real_escape_string($conn,$_REQUEST['nombre'] ?? '');
    $usuario=mysqli_real_escape_string($conn,$_REQUEST['usuario'] ?? '');
    $clave=md5(mysqli_real_escape_string($conn,$_REQUEST['clave'] ?? ''));
    $idadmin=mysqli_real_escape_string($conn,$_REQUEST['idadmin'] ?? '');

    //actualizar o editar se utiliza
    $sql="UPDATE tb_admin SET
    nombre='".$nombre."',usuario='".$usuario."',clave='".$clave."'
    WHERE idadmin='".$idadmin."';";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=admin&mensaje=Usuario '.$usuario.' Actualizado">';
    }
}

//consulta a la tabla usuarios
$idadmin = mysqli_real_escape_string($conn,$_REQUEST['idadmin']??'');
$sql ="SELECT idadmin,nombre,usuario,clave FROM tb_admin WHERE idadmin='".$idadmin."';";
$result =mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<div class="users">
    <div class="users__box">
        <div class="box"></div>
        <div class="users__content">
            <h2>EDITAR ADMINISTRADOR</h2>
            <form action="panel.php?modulo=editardatos" method="post" id="editardatos" class="users__form">
                <div class="form">
                    <label for="Nombre" class="form__label">NOMBRE / APELLIDO</label>
                    <input type="text" name="nombre" id="nombre" class="form__input" placeholder="Ingresar Nombre">
                </div>
                <div class="form">
                    <label for="Email" class="form__label">CORREO ELECTRÓNICO</label>
                    <input type="email" name="usuario" id="usuario" class="form__input" placeholder="Ingresar Email">
                </div>
                <div class="form">
                    <label for="Clave" class="form__label">CLAVE</label>
                    <input type="password" name="clave" id="clave" class="form__input" placeholder="Ingresar Clave Nueva">
                </div>
                <div class="form">
                    <input type="hidden" name="idadmin" value="<?php echo $row['idadmin'] ?>">
                    <button type="submit" name="editar" class="btn__form btn__edit">EDITAR</button>
                    <button type="reset" class="btn__form btn__cancel">CANCELAR</button>
                </div>                
            </form>
        </div>
    </div>
</div>



<?php
if(isset($_REQUEST['actualizar'])){
    $enlace=mysqli_real_escape_string($conn,$_REQUEST['enlace'] ?? '');
    $idlive=mysqli_real_escape_string($conn,$_REQUEST['idlive'] ?? '');

    //actualizar o editar se utiliza
    $sql="UPDATE tb_live SET enlace='".$enlace."' WHERE idlive='".$idlive."';";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=linklive&mensaje=Link '.$enlace.' Actualizado">';
    }
}

//consulta a la tabla usuarios
$idlive = mysqli_real_escape_string($conn,$_REQUEST['idlive']??'');
$sql ="SELECT idlive,enlace FROM tb_live WHERE idlive='".$idlive."';";
$result =mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<div class="users2">
    <div class="users__box">
        <div class="box"></div>
        <div class="users__content">
            <h2>ACTUALIZAR <span>/</span> LINK YOUTUBE</h2>
            <form action="panel.php?modulo=editardatos" method="post" id="linklive" class="users__form">
                <div class="form">
                    <label for="enlace" class="form__label">LINK DE YOUTUBE</label>
                    <input type="text" name="enlace" id="enlace" class="form__input" placeholder="Ingresar Link">
                </div>
                <div class="form">
                    <p><b>NOTA:</b> Debes Agregar "<span class="correct">embed/</span>" para que el Video funcione<br><b>EJEMPLO:</b> Link de Default de Youtube https://www.youtube.com/<span class="fail">watch?v=</span>rbWRiLu-jyw<br><b>ELIMINAR:</b> "<span class="fail">watch?v=</span>" y Reemplazar por "<span class="correct">embed/</span>"<br><b>FORMA CORRECTA:</b> https://www.youtube.com/<span class="correct">embed/</span>=rbWRiLu-jyw</p>
                </div>
                <div class="form">
                    <input type="hidden" name="idlive" value="<?php echo $row['idlive'] ?>">
                    <button type="submit" name="actualizar" class="btn__actu">ACTUALIZAR</button>
                </div>                
            </form>
        </div>
    </div>
</div>