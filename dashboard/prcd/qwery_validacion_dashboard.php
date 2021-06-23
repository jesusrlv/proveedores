<?php
// $id = $_SESSION['id'];
    // include('prcd/conn.php');
    $x = 0;
    $c1 = 0;
    $d1 =0;
    $c = 0;
    
    $query="SELECT * FROM datos WHERE id_ext='$id'";
    $resultado= $conn->query($query);
    $row=$resultado->fetch_assoc();
        // $datos = $row['id_ext'];
        $a = $row['validacion'];
     
    $query2="SELECT * FROM direccion WHERE id_ext='$id'";
    $resultado2= $conn->query($query2);
    $row2=$resultado2->fetch_assoc();
        $b = $row2['validacion'];
     
    $query3="SELECT * FROM banco WHERE id_ext='$id'";
    $resultado3= $conn->query($query3);
    // $row3=$resultado3->fetch_assoc();
        // $c = $row3['validacion'];
        while($row3 = $resultado3->fetch_assoc()){
            $c1 = $c1 + $row3['validacion'];
            $d1++;
        }

        $c = ($c1/$d1);
     
    $query4="SELECT * FROM docs WHERE id_ext='$id'";
    $resultado4= $conn->query($query4);
    // $row4=$resultado4->fetch_assoc();
        
        while($row4 = $resultado4->fetch_assoc()){
            $x = $x + $row4['validacion'];
        }
     
    //VALIDACIONES DASHBOARD
    
    $cuenta1 = "SELECT * FROM validacion WHERE id_ext = $id AND tipo = 1";
    $resultado5= $conn->query($cuenta1);
    $row_validacion1 = $resultado5->fetch_assoc();

    $uno = $row_validacion1['validacion'];
    
    $cuenta2 = "SELECT * FROM validacion WHERE id_ext='$id' AND tipo = 2";
    $resultado6= $conn->query($cuenta2);
    $row_validacion2 = $resultado6->fetch_assoc();

    $dos = $row_validacion2['validacion'];
    
    $cuenta3 = "SELECT * FROM validacion WHERE id_ext='$id' AND tipo = 3";
    $resultado7= $conn->query($cuenta3);
    $row_validacion3 = $resultado7->fetch_assoc();

    $tres = $row_validacion3['validacion'];
    
    $cuenta4 = "SELECT * FROM validacion WHERE id_ext='$id' AND tipo = 4";
    $resultado8= $conn->query($cuenta4);
    $row_validacion4 = $resultado8->fetch_assoc();

    $cuatro = $row_validacion4['validacion'];

    $suma_validacion = $uno + $dos + $tres + $cuatro;



    ?>
