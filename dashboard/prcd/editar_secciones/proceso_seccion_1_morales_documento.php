<?php
session_start();
?>
<html>
<header>
        <link rel="shortcut icon" href="../../../img/mini_logo_cigo.ico" />  

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php

include('../conn.php');

$id_ext = $_SESSION['id'];

$archivo = "SELECT * FROM datos WHERE id_ext = $id_ext";
$resultado_archivo= $conn->query($archivo);
$row_archivo = $resultado_archivo->fetch_assoc();

// $razon = $_POST['razon'];
// $denominacion = $_POST['denominacion'];
// $acta = $_POST['acta'];

// $rfc = $_POST['rfc'];

$link= 'acta_personas_morales';
// $validacion = 1;
// $tipo_usr = 2;
// $tipo_seccion = 1;

$fileName = $_FILES["acta"]["name"]; // The file name
$fileTmpLoc = $_FILES["acta"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["acta"]["type"]; // The type of file it is
$fileSize = $_FILES["acta"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["acta"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}


$archivo_ext=$_FILES['acta']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["acta"]["tmp_name"],"../../archivos/". $link .'_'. $id_ext .'.'.$extension)){
    echo "$fileName carga completa";
    $ruta = "archivos/". $link .'_'. $id_ext .'.'.$extension;

// $sql="INSERT INTO datos(rfc,moral_razon,moral_denominacion,moral_archivo_acta,id_ext,tipo_usr,validacion) 
// VALUES('$rfc','$razon','$denominacion','$ruta','$id_ext','$tipo_usr','$validacion')";
// $resultado= $conn->query($sql);

// $sql2 = "INSERT INTO validacion(id_ext,tipo,validacion)
// VALUES('$id_ext','$tipo_seccion','$validacion')";
// $resultado2= $conn->query($sql2);


// if($resultado){

    echo "<script type=\"text/javascript\">Swal.fire(
        'Proceso exitoso',
        'Acta constitutiva actualizada',
        'success'
      ).then(function(){location.href='../../dashboard.php';}
    
      
    
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

// } else {
//   echo "move_uploaded_file function failed";
// }

?>