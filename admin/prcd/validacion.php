<?php
session_start();
?>
<html>
<header>
        <!-- <link rel="shortcut icon" href="../../../img/mini_logo_cigo.ico" />   -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php

include('conn.php');

$validacion = $_POST['validacion'];
$proveedor = $_POST['proveedor'];
$caja_validacion = $_POST['caja_validacion'];

if($validacion == 1){
    $sql="UPDATE validacion SET validacion='$caja_validacion' WHERE id_ext='$proveedor' AND tipo = '$validacion'";
    $resultado= $conn->query($sql);
}
elseif($validacion == 2){
    $sql="UPDATE validacion SET validacion='$caja_validacion' WHERE id_ext='$proveedor' AND tipo = '$validacion'";
    $resultado= $conn->query($sql);
}
elseif($validacion == 3){
    $sql="UPDATE validacion SET validacion='$caja_validacion' WHERE id_ext='$proveedor' AND tipo = '$validacion'";
    $resultado= $conn->query($sql);
}
elseif($validacion == 4){
    $sql="UPDATE validacion SET validacion='$caja_validacion' WHERE id_ext='$proveedor' AND tipo = '$validacion'";
    $resultado= $conn->query($sql);
}


if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Validación actualizada',
        'success'
      ).then(function(){location.href='../datos_proveedor.php?id=".$proveedor."';}
    
      
    
    );</script>";
}

else{
    echo "<script type=\"text/javascript\">Swal.fire(
        'Advertencia',
        'No agregado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}


?>