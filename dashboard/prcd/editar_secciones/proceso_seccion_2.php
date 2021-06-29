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

$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$num_int = $_POST['num_int'];
$num_ext = $_POST['num_ext'];
$email = $_POST['email'];
$tel_of = $_POST['tel_of'];
$tel_cel = $_POST['tel_cel'];

$sql="UPDATE direccion SET colonia='$colonia',cp='$cp',n_int='$num_int',n_ext='$num_ext',email='$email',tel_of='$tel_of',tel_cel='$tel_cel' WHERE id_ext='$id_ext'";
$resultado= $conn->query($sql);
// $sql="INSERT INTO direccion(id_ext,colonia,cp,n_int,n_ext,email,tel_of,tel_cel,validacion) 
// VALUES('$id_ext','$colonia','$cp','$num_int','$num_ext','$email','$tel_of','$tel_cel','$validacion')";
// $resultado= $conn->query($sql);

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
        'No actualizado',
        'warning'
      ).then(function(){window.location=history.go(-1);}
    
      
    
    );</script>";

}

?>