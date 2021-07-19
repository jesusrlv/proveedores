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

$id = $_REQUEST['id'];
$proveedor = $_REQUEST['ext'];

$sql="DELETE FROM observaciones WHERE id = $id";
$resultado= $conn->query($sql);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Eliminación completa',
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