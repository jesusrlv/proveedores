<?php    
    session_start();
    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    
    $id=$_SESSION['id'];
    $tipo_doc = 7;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    $link= 'archivo7';
    $validacion = 1;
    
$fileName = $_FILES["file7"]["name"]; // The file name
$fileTmpLoc = $_FILES["file7"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file7"]["type"]; // The type of file it is
$fileSize = $_FILES["file7"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file7"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

$archivo_ext=$_FILES['file7']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file7"]["tmp_name"],"../archivos/". $link .'_'. $id .'.'.$extension)){
    echo "$fileName carga completa";
    
    $ruta = "archivos/". $link .'_'. $id .'.'.$extension;
    include('conn.php');
    // $sqlinsert= "UPDATE documentos SET link4='$ruta_pptx' WHERE id_usr='$curp'";
    $sqlinsert= "INSERT INTO docs(id_ext,ruta,tipo_doc,fecha_agregado,validacion) 
    VALUES('$id','$ruta','$tipo_doc','$fecha_sistema','$validacion')";
    $resultado2= $conn->query($sqlinsert);

} else {
    echo "move_uploaded_file function failed";
}

?>
