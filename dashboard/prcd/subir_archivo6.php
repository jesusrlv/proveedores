<?php    
    session_start();
    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
   
    $id=$_SESSION['id'];
    $tipo_doc = 6;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
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

$archivo_ext=$_FILES['file6']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file6"]["tmp_name"],"../archivos/". $link .'_'. $id .'.'.$extension)){
    echo "$fileName carga completa";
    
    $ruta = "../archivos/". $link .'_'. $id .'.'.$extension;
    include('conn.php');
    // $sqlinsert= "UPDATE documentos SET link4='$ruta_pptx' WHERE id_usr='$curp'";
    $sqlinsert= "INSERT INTO docs(id_ext,ruta,tipo_doc,fecha_agregado) 
    VALUES('$id','$ruta','$tipo_doc','$fecha_sistema')";
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
