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

$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$curp = $_POST['curp'];
$rfc = $_POST['rfc'];
$id_ext = $_SESSION['id'];
$tipo_usr = 1;
$validacion = 1;
$tipo_seccion = 1;
$actividad = $_POST['actividad'];

$sql="INSERT INTO datos(fisc_apellido,fisc_nombre,fisc_curp,rfc,id_ext,tipo_usr,validacion,actividad) 
VALUES('$apellido','$nombre','$curp','$rfc','$id_ext','$tipo_usr','$validacion'.'$actividad')";
$resultado= $conn->query($sql);

$sql2 = "INSERT INTO validacion(id_ext,tipo,validacion)
VALUES('$id_ext','$tipo_seccion','$validacion')";
$resultado2= $conn->query($sql2);

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