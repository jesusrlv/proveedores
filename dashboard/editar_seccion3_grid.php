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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">


    <!-- Scripts -->
    <script src="css/form-valdation.js"></script>

    <!-- bundle para swal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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

            <!-- here -->

            <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">SECCIÓN 3</h1>
          <p class="lead"><i class="bi bi-list-check"></i> Cuenta(s) bancaria(s) agregada(s)</p>
          <!-- <a href="seccion3.php" class="btn btn-outline-primary"><i class="bi bi-journal-plus"></i> Agregar cuenta</a> -->

          <hr class="my-4">

        <!-- ROW -->
        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de cuentas vigentes</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>

          <div class="container-fluid"><!--container-fluid-->
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead class="text-center">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col"># Banco</th>
                    <th scope="col"># Cuenta</th>
                    <th scope="col"># CLABE</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Validación</th>
                    <!-- <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th> -->
                    </tr>
                </thead>

                <?php
                $tabla="SELECT * FROM banco WHERE id_ext = '$id' ORDER BY id ASC";
                $resultadotabla = $conn->query($tabla);
                $numero=0;
            while($row = $resultadotabla->fetch_assoc()){
                $numero++;
                
                echo '<tr>';
                    echo '<td><center>'.$numero.'</center></td>';
                    echo '<td><center>'.$row['banco'].'</center></td>';
                    echo '<td><center>'.$row['no_cuenta'].'</center></td>';
                    echo '<td><center>'.$row['no_clabe'].'</center></td>';
                    echo '<td><center>'.$row['sucursal'].'</center></td>';
                    echo '<td><center>'.$row['concepto'].'</center></td>';
                    if($row['validacion']==0){
                      echo '<td><center><span class="badge badge-warning text-center"><i class="bi bi-exclamation-circle-fill"></i> En validación</span></center></td>';
                    }
                    elseif($row['validacion']==1){
                      echo '<td><center><span class="badge badge-primary text-center"><i class="bi bi-check-square-fill"></i> Validado</span></center></td>';
                    }
                    elseif($row['validacion']==2){
                      echo '<td><center><span class="badge badge-danger text-center"><i class="bi bi-x-circle-fill"></i> No Validado</span></center></td>';
                    }
                    
                    
                    // echo '<td><a href="#"><center><i class="bi bi-pencil-square"></i> Editar</center></a></td>';
                    // echo '<td><center><a href="#"><i class="bi bi-trash-fill"></i> Eliminar</a></center></td>';
                    
                echo '</tr>';
            
            }

            ?>

                </table>
            <!-- /.box-body -->
          </div>
        
          <!-- /.box -->
        </div>
      </div>
        <!-- ROW -->

                <!-- <hr class="mb-4"> -->
                
              </div>
              
              <hr class="mb-4">
              
        </div>
        <!-- interno -->
        <hr class="my-4">
       
        <!-- <p><button class="btn btn-primary btn-lg btn-block" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-check-square-fill"></i> Cerrar cuentas (Terminar Sección 3)</button></p> -->
             
              <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-danger" id="exampleModalLabel"><strong><i class="bi bi-exclamation-triangle-fill"></i> ¡Advertencia!</strong></h5>
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        </div>
                        <div class="modal-body text-center">
                          Si cierras esta sección no podrás agregar más cuentas. <strong>Vas a terminar el proceso de la Sección 3, ¿quieres continuar?</strong>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cerrar</button>
                          <a href="prcd/proceso_seccion3_grid.php" type="button" class="btn btn-danger">Continuar <i class="bi bi-caret-right-fill"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <a type="button" class="btn btn-outline-primary btn-lg btn-block" href="dashboard.php"><i class="bi bi-house-fill"></i> Regresar</a>

          </div><!-- container-fluid -->
        </div>
      </div>

            <!-- here -->

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
