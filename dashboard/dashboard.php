<?php
session_start();

// if (isset($_SESSION['usr'])) {
//     if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==3){
        // header('Location: javascript: history.go(-1)');
    // }
    // else{
        // header('Location:prcd/sort.php');
    // }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
// } else {
    // En caso contrario redirigimos el visitante a otra página

    // echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    // header('Location: prcd/sort.php');
    // die();
// }

include('prcd/conn.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard | Proveedores</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-dark">
     
     <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     
   </nav> 
   
  <body class="bg-secondary">
     
     <!-- <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-dark">
     
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </nav>  -->

<div class="container-fluid">

  

  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/logo.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted text-light">

          <span class="text-light">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
          <hr>
        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Requisitos</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> Formato RCB-1
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> SAT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> FINANZAS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">
               
              <i class="fas fa-file-alt"></i> Cédula proveedores
            </a>
          </li>

          <li class="nav-item">
            <hr style="color: dimgrey;">
            <a class="nav-link text-light" href="prcd/sort.php"><i class="bi bi-box-arrow-left"></i> CERRAR SESIÓN</a>
          </li>

        </ul>
    
    </nav>

    <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;"> -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-secondary" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        
       
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h4 class="lead text-light" style="margin-top:-27px"> <?php
                  // date_default_timezone_set('America/Mexico_City');
                  // setlocale(LC_TIME, 'es_MX.UTF-8');
                  // $fecha_actual=strftime("%Y-%m-%d");
                  // $hora_actual=strftime("%H:%M:%S");

                  // echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h4>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">
   


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
        
          <h1 class="h1 text-secondary text-center">BIENVENIDO AL PADRÓN DE PROVEEDORES</h1>
          <p class="lead text-secondary text-center">INJUVENTUD</p>
          <hr class="my-4">

        <!-- consulta de validación -->
        
        <?php
        
        include('prcd/qwery_validacion_dashboard.php');
        // echo $x;

        
        ?>
        <!-- consulta de validación -->


        <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-4">
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary">Datos</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Agregar datos de su empresa</p>
                
                <?php
                  if($uno == 0){
                    echo '<a href="seccion1_tipo.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($uno > 0){
                    if($validacion_tipo == 1){
                      echo '<a href="editar_seccion1.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar persona física</a>';
                    }
                    elseif($validacion_tipo == 2){
                      echo '<a href="editar_seccion1_morales.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar persona moral</a>';
                      echo '<a href="editar_seccion1_morales_acta.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar acta</a>';
                    }
                    
                  }
                  
                ?>

                
                
                
                <hr>
                <p class="card-text h4 text-center text-secondary">Estatus</p>

                <?php
                  if($uno == 0){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-danger">Sin información</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i></p>';
                  }
                  elseif($uno==1){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-warning">En revisión</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                  }
                  if($uno == 2){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-primary">Completado</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';
                  }
                ?>

              </div>
            </div>
          </div>
          
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary">Dirección</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Dirección de su empresa</p>
                
                <?php
                  if($dos == 0){
                    echo '<a href="seccion2.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($dos > 0){
                    echo '<a href="editar_seccion2.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>';
                  }
                  
                ?>
                
                
                
                <hr>
                <p class="card-text h4 text-center text-secondary">Estatus</p>

                <?php
                  if($dos == 0){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-danger">Sin información</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i></p>';
                  }
                  elseif($dos==1){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-warning">En revisión</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                  }
                  if($dos == 2){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-primary">Completado</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';
                  }
                ?>
                <!-- <p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p> -->


              </div>
            </div>
          </div>

          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary">Datos bancarios</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Agregar datos bancarios de su empresa</p>
                <?php
                  // if($c1 == 0){
                  //   echo '<a href="seccion3_grid.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  // }
                  // elseif($c1 > 0){
                  //   echo '<a href="" ></a>';
                  // }
                  if($tres == 0){
                    echo'<a href="seccion3_grid.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar cuenta(s) bancaria(s)</a>';
                  }
                  if($tres == 1){
                    echo'<a href="editar_seccion3_grid.php" class="card-link"><i class="bi bi-eye-fill"></i> Ver cuenta(s) bancaria(s)</a>';
                  }
                  if($tres == 2){
                    echo'<a href="editar_seccion3_grid.php" class="card-link"><i class="bi bi-eye-fill"></i> Ver cuenta(s) bancaria(s)</a>';
                  }
                ?>
                


                

                <!-- <a href="#" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a> -->
                <hr>
                <p class="card-text h4 text-center text-secondary">Estatus</p>

                <?php
                  if($tres == 0){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-danger">Sin información</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i></p>';
                  }
                  elseif($tres == 1){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-warning">En revisión</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                  }
                  elseif($tres == 2){
                    echo '<p class="card-text h5 text-center text-light"><span class="badge bg-primary">Completado</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';
                  }

                ?>

                <!-- <p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p> -->
              </div>
            </div>
          </div>

          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 36rem; height: 18rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary">Documentos</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Agregar datos de su empresa</p>
                
                <?php
                  // if($x < 8){
                  //   echo '<a href="seccion4.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  // }
                  // elseif($x >= 8){
                  //   echo '<a href="" ></a>';
                  // }
                  if($cuatro == 0){
                    echo '<a href="seccion4.php" class="card-link"><i class="bi bi-plus-circle-fill"></i> Agregar</a>';
                  }
                  elseif($cuatro > 0){
                    echo '<a href="editar_seccion4.php" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a>';
                    echo '<a href="editar_seccion4_vigencia.php" class="card-link"><i class="bi bi-pencil-square"></i> Vigencias</a>';
                  }
                  
                ?>
                
                
                
                
                
                <!-- <a href="#" class="card-link"><i class="bi bi-pencil-square"></i> Editar</a> -->
                <hr>
                <p class="card-text h4 text-center text-secondary">Estatus</p>
                
                <?php
                // if($x==0){
                // echo '<p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i></p>';
                // }
                // elseif($x > 0 AND $x <= 8){
                // echo '<p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                // }
                // if($x > 8){
                // echo '<p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';

                // }

                if($cuatro == 0){
                  echo '<p class="card-text h5 text-center text-light"><span class="badge bg-danger">Sin información</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem; "></i></p>';
                }
                elseif($cuatro==1){
                  echo '<p class="card-text h5 text-center text-light"><span class="badge bg-warning">En revisión</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                }
                if($cuatro == 2){
                  echo '<p class="card-text h5 text-center text-light"><span class="badge bg-primary">Completado</span></p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';
                }
                ?>

              </div>
            </div>
          </div>

          
        </div>
      </div> <!-- container -->
      <hr>

      <div class="container">
        <div class="row row-cols-1 row-cols-md-1">
          <div class="col mb-12">

            <!-- <div class="card text-white bg-primary mb-12" style="width: 100%; "> -->
            <?php
              if ($suma_validacion > 7){
                echo '<div class="card text-white bg-primary mb-12" style="width: 100%; ">';
              }
              else {
                echo '<div class="card text-white bg-danger mb-12" style="width: 100%; ">';
              }
            ?>


              <!-- <div class="card-header">Tabla 1</div> -->
              <div class="card-body"><br>
                <h1 class="card-title text-center"><i class="bi bi-exclamation-circle"></i> DICTAMEN</h1>
                <p class="card-text">El siguiente dictamen para pertenecer al padrón de proveedores del <strong>Instituto de la Juventud del Estado de Zacatecas</strong> es el siguiente:</p>
                  
                 
                
                <p class="card-text h3 text-center">ESTATUS</p>
                <hr class="bg-light">
                  <?php
                    if($suma_validacion == 8){
                        echo '<p class="card-text h4 text-center" style="aligment-item:center;">Validación correcta</p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p>';
                    }
                    else{
                      echo '<p class="card-text h4 text-center" style="aligment-item:center;">En revisión</p><p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-exclamation-circle-fill text-warning" style="font-size: 3rem;"></i></p>';
                    }
                  ?>

                  <!-- <div class="alert alert-danger" role="alert"> -->

                    <?php

                      $observaciones ="SELECT * FROM observaciones WHERE id_ext = '$id' ORDER BY seccion ASC";
                      $resultado_observaciones= $conn->query($observaciones);
                      while($row_observaciones = $resultado_observaciones->fetch_assoc()){
                        echo '<p>';
                        echo '<div class="alert alert-danger" role="alert">';
                        // echo '<strong>'.$row_observaciones['seccion'].'</strong>';
                        if($row_observaciones["seccion"]==1){
                          echo '<strong><i class="bi bi-person-lines-fill"></i> Datos personales</strong>';
                        }
                        elseif($row_observaciones["seccion"]==2){
                          echo '<strong><i class="bi bi-building"></i> Dirección</strong>';
                        }
                        elseif($row_observaciones["seccion"]==3){
                          echo '<strong><i class="bi bi-bank2"></i> Cuentas bancarias</strong>';
                        }
                        elseif($row_observaciones["seccion"]==4){
                          echo '<strong><i class="bi bi-file-post"></i> Documentos</strong>';
                        }
                        echo '<hr>';
                        echo '</p>';
                        echo '<p>';
                        echo $row_observaciones['observaciones'];
                        echo '</div>';
                        echo '</p>';
                        
                      }

                    ?>
                        <!-- <p> -->
                          <?php 
                        // echo $suma_validacion 
                        ?>
                        <!-- </p> -->
                  <!-- </div> -->
                  <hr class="bg-light">
                <!-- <p class="card-text h4 text-center" style="aligment-item:center;"><i class="bi bi-check-circle-fill" style="font-size: 3rem; color: cornflowerblue;"></i> <i class="bi bi-emoji-smile-fill" style="font-size: 3rem; color: cornflowerblue;"></i> <i class="bi bi-emoji-neutral-fill" style="font-size: 3rem; color: cornflowerblue;"></i> <i class="bi bi-emoji-frown-fill" style="font-size: 3rem; color: cornflowerblue;"></i></p> -->
                <!-- <p><a href="trimestre1.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p> -->
              </div>
            </div>
          </div>
          </div>
          </div>
        <!-- interno -->


        </div>
      </div>

      <!-- card -->
      
      <!-- card -->

      

      </div>


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

https://startbootstrap.com/themes/admin-dashboard
 -->
