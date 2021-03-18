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
include('conn.php');

$razon = $_POST['razon'];
$denominacion = $_POST['denominacion'];
$acta = $_POST['acta'];

$rfc = $_POST['rfc'];
$id_ext = $_SESSION['id'];
$tipo_usr = 2;

$sql="INSERT INTO datos(rfc,moral_razon,moral_denominacion,moral_archivo_acta,id_ext,tipo_usr) 
VALUES('$rfc','$razon','$denominacion','$acta','$id_ext','$tipo_usr')";
$resultado= $conn->query($sql);

if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Datos agregados',
        'success'
      ).then(function(){location.href='../dashboard.php';}
    
      
    
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