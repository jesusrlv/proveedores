<?php    
    session_start();
    include('../conn2.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
   
    $id=$_SESSION['id'];
    $tipo_doc = 4;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    $link= 'archivo4';
    $validacion = 1;
    
$fileName = $_FILES["file4"]["name"]; // The file name
$fileTmpLoc = $_FILES["file4"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file4"]["type"]; // The type of file it is
$fileSize = $_FILES["file4"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file4"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}

$archivo_ext=$_FILES['file4']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

if(move_uploaded_file($_FILES["file4"]["tmp_name"],"../../archivos/". $link .'_'. $id .'.'.$extension)){
    $ruta = $link.'.'.$extension;
    echo "$ruta documento actualizado";
    
} else {
    echo "move_uploaded_file function failed";
}
    
    
?>
