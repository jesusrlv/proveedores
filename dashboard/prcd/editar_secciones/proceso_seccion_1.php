<html>
<header>
        <link rel="shortcut icon" href="../../../img/mini_logo_cigo.ico" />  

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
session_start();
include('../conn.php');

$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$curp = $_POST['curp'];
$rfc = $_POST['rfc'];
$id_ext = $_SESSION['id'];
// $tipo_usr = 1;
// $validacion = 1;
// $tipo_seccion = 1;

$sql="UPDATE datos SET fisc_apellido='$apellido',fisc_nombre='$nombre',fisc_curp='$curp',rfc='$rfc' WHERE id_ext='$id_ext'";
$resultado= $conn->query($sql);

// $sql2 = "INSERT INTO validacion(id_ext,tipo,validacion)
// VALUES('$id_ext','$tipo_seccion','$validacion')";
// $resultado2= $conn->query($sql2);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Datos actualizados',
        'success'
      ).then(function(){location.href='../../dashboard.php';}
    
      
    
    );</script>";
}

else{
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'No actualizados',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}

?>