<?php 
require('conn2.php');
sleep(1);
if (isset($_POST)) {
    $rfc = (string)$_POST['rfc'];
 
    $result = $conn->query(
        'SELECT * FROM datos WHERE rfc = "'.strtolower($rfc).'"'
    );
 
    // if ($result->num_rows > 0) {
    if ($result) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Nombre de usuario no disponible.</div>
        
        <style>
            #boton_submit{display:none;}
        </style>
        ';
    } 
    else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}

?>

