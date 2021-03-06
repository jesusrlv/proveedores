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
    <title>Administrador | Proveedores</title>

    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- íconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <style>

    a:link { text-decoration: none; }

    a:visited { text-decoration: none; }

    a:hover { text-decoration: none; }

    a:active { text-decoration: none; }

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
     
     <button class="bg-warning navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     
   </nav> 
   
  <body class="bg-dark">
     
     <!-- <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-dark text-dark">
     
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </nav>  -->

<div class="container-fluid">

  

  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-danger sidebar collapse" height="100%">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/logo_white_inju.png" width="35%" class="" alt="" loading="lazy">  
      
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
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-dark" style="background-color:#eaeef4; height:100%;">
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

              <?php

                $persona_fisica = "SELECT * FROM datos where tipo_usr = 1";
                $resultado_persona_fisica= $conn->query($persona_fisica);
                // $row_fisica = $resultado_persona_fisica->num_rows;

                $persona_moral = "SELECT * FROM datos where tipo_usr = 2";
                $resultado_persona_moral= $conn->query($persona_moral);
                // $row_moral = $resultado_persona_moral->num_rows;

              ?>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid" style="max-height: 100%;">
   
      <div class="jumbotron jumbotron-fluid" style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:0%; padding-top:45px; ">
        <div class="container-fluid">
        
          <h1 class="h1 text-secondary text-center">BIENVENIDO AL SISTEMA ADMINISTRADOR DE PROVEEDORES</h1>
          <p class="lead text-secondary text-center">LISTADO COMPLETO</p>
          <hr class="my-4">
          <main class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm bg-danger">
              <img class="me-3" src="../img/logo_white_inju.png" alt="" width="48" height="48" style="margin-right:18px">
              <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1 lead"><i class="bi bi-person"></i> | Personas físicas</h1>
                <!-- <small><i class="bi bi-person"></i> Personas físicas</small> -->
              </div>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-list"></i> Listado</h6>
              <!-- <div class="d-flex text-muted pt-3">
              <i class="bi bi-person h2 text-primary" style="margin-right:9px"></i> 
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                  <strong class="d-block text-gray-dark">Usuario</strong>
                  Datos de la persona
                </p>
              </div> -->

              <?php

                while($row_fisica = $resultado_persona_fisica->fetch_assoc()){
                  echo '<div class="d-flex text-muted pt-3">';
                  echo '<i class="bi bi-person h2 text-primary" style="margin-right:9px"></i>';
                  echo '<p class="pb-3 mb-0 small lh-sm border-bottom">';
                  echo '<strong class="d-block text-gray-dark"><a href="datos_proveedor.php?id='.$row_fisica['id_ext'].'" target="_self">'.$row_fisica['fisc_apellido'].' '.$row_fisica['fisc_nombre'].'</a></strong>';
                  echo $row_fisica['fisc_curp'].' | '.$row_fisica['rfc'];
                  echo '</p>';
                 echo '</div>';

                }

              ?>

              
              <!-- <small class="d-block text-end mt-3">
                <a href="#">listado</a>
              </small> -->
            </div>
            <hr>
            <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm bg-danger">
              <img class="me-3" src="../img/logo_white_inju.png" alt="" width="48" height="48" style="margin-right:18px">
              <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1 lead"><i class="bi bi-people"></i> | Personas morales</h1>
                <!-- <small><i class="bi bi-people"></i> Personas morales</small> -->
              </div>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-list"></i> Listado</h6>
              <!-- <div class="d-flex text-muted pt-3">
              <i class="bi bi-people h2 text-primary" style="margin-right:18px"></i> 
                <p class="pb-3 mb-0 small lh-sm border-bottom">
                  <strong class="d-block text-gray-dark">Usuario</strong>
                  Datos de la persona
                </p>
              </div> -->
              
              <?php

                while($row_moral = $resultado_persona_moral->fetch_assoc()){
                  echo '<div class="d-flex text-muted pt-3">';
                  echo '<i class="bi bi-person h2 text-primary" style="margin-right:9px"></i>';
                  echo '<p class="pb-3 mb-0 small lh-sm border-bottom">';
                  echo '<strong class="d-block text-gray-dark"><a href="datos_proveedor.php?id='.$row_moral['id_ext'].'" target="_self">'.$row_moral['moral_razon'].'</a></strong>';
                  echo $row_moral['rfc'].' | '.$row_moral['moral_denominacion'];
                  echo '</p>';
                 echo '</div>';

                }

              ?>
              <!-- <small class="d-block text-end mt-3">
                <a href="#">All updates</a>
              </small> -->
            </div>

          </main>

          <hr>
            <!-- consulta de validación -->
            <?php
                        
            ?>
            <!-- consulta de validación -->
            <!-- <div class="table-responsive">
                <table class="table table-striped align-middle table-hover">
                    <thead class="bg-dark text-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div> -->

        </div> <!-- container -->

        
    
      
        </div>

      <!-- card -->
      
      

    </div><!-- jumbotron -->


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
