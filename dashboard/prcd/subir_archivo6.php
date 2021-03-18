<?php    
    session_start();
    $codigo=$_SESSION['codigo'];
    $id=$_SESSION['id'];
    $curp=$_SESSION['curp'];
    
    $link= 'archivo6';
    $fileName = $_FILES["file6"]["name"]; // The file name
$fileTmpLoc = $_FILES["file6"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file6"]["type"]; // The type of file it is
$fileSize = $_FILES["file6"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file6"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

//move_uploaded_file($_FILES['archivo']['tmp_name'],"archivos/" . $codigo . '_' . $_FILES['archivo']['name']);

//move_uploaded_file($_FILES["file1"]["tmp_name"],"archivos/". $codigo .'_'.$_FILES['file1']['name'])
//    //echo "$fileName upload is complete";

if(move_uploaded_file($_FILES["file6"]["tmp_name"],"../archivos/". $link .'_'. $codigo .'_'.$_FILES['file6']['name'])){
    echo "$fileName carga completa";
    
    $ruta_pptx = "archivos/". $link .'_'. $codigo .'_'.$_FILES['file6']['name'];
    include('../../../conn/conexion.php');
    $sqlinsert= "UPDATE archivos SET link6='$ruta_pptx' WHERE id_usr='$curp'";
    $resultado2= $conn->query($sqlinsert);

    
} else {
    echo "move_uploaded_file function failed";
}
    
    
    
    
    
    //COMENTARIO CARGAR ARCHIVO
    
//    $link=$_POST['file1'];
//    //$id=$_REQUEST['id'];
//$id=$_SESSION['id'];
//$codigo=$_SESSION['codigo'];
//    include("conexion.php");
//    $sql= "SELECT * FROM ponencia WHERE id='$id'";
//    $resultado= $conn->query($sql);
//    $row=$resultado->fetch_assoc();
//    $codigo=$row['codigo'];
//    
//    
//    
//    //código subir pptx OJO PARA SUBIR EL ARCHIVO ES EL PROCESO DESPUÉS DE ADJUNTAR EN EL 01
//     if ($_FILES['archivo']["error"] > 0)
//  {
// echo "Error: " . $_FILES['archivo']['error'] . "<br>";
//    
//         echo "<script type=\"text/javascript\">Swal.fire('No se subió el archivo ').then(function(){window.location='06_busqueda.php';});</script>";
//  }
//else
//  {
//  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
//  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
//  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
//  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
//
//  //ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos
//  
//    move_uploaded_file($_FILES['archivo']['tmp_name'],"archivos/" . $codigo . '_' . $_FILES['archivo']['name']);
//    
//    $ruta_pptx = 'archivos/' . $codigo . '_' . $_FILES['archivo']['name'];
//    
//    $sqlinsert= "UPDATE ponencia SET url_cartel='$ruta_pptx' WHERE id='$id'";
//
//    $resultado2= $conn->query($sqlinsert);
    

    //CARGAR ARCHIVO
    
    
    //echo "<script type=\"text/javascript\">Swal.fire('Se subió el archivo en extenso de manera correcta ').then(function(){window.location='06_busqueda.php';});</script>"; 
//}  
//    
    //código subir pptx OJO PARA SUBIR EL ARCHIVO ES EL PROCESO DESPUÉS DE ADJUNTAR EN EL 01
?>
