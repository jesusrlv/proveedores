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

$id_ext = $_SESSION['id'];

$validador = $_POST['doc'];
$fecha = $_POST['fecha'];

$sql="UPDATE docs SET tipo_doc='$validador',vigencia='$fecha' WHERE tipo_doc='$validador' AND id_ext='$id_ext'";
$resultado= $conn->query($sql);

// $sql2 = "INSERT INTO validacion(id_ext,tipo,validacion)
// VALUES('$id_ext','$tipo_seccion','$validacion')";
// $resultado2= $conn->query($sql2);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Banco actualizado',
        'success'
      ).then(function(){location.href='../../editar_seccion4_vigencia.php';}
    
      
    
    );</script>";
}

else{
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'No actualizado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}

?>