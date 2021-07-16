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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- íconos Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

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

                $id_proveedor = $_REQUEST['id'];
                $consulta_proveedor = "SELECT * FROM datos WHERE id_ext = $id_proveedor";
                $resultado_consulta_proveedor= $conn->query($consulta_proveedor);
                $row_consulta_proveedor = $resultado_consulta_proveedor->fetch_assoc();

                $consulta_domicilio = "SELECT * FROM direccion WHERE id_ext = $id_proveedor";
                $resultado_consulta_domicilio= $conn->query($consulta_domicilio);
                $row_consulta_domicilio = $resultado_consulta_domicilio->fetch_assoc();

                $consulta_banco = "SELECT * FROM banco WHERE id_ext = $id_proveedor";
                $resultado_consulta_banco= $conn->query($consulta_banco);
                // $row_consulta_banco = $resultado_consulta_banco->fetch_assoc();

                $consulta_documentos = "SELECT * FROM docs WHERE id_ext = $id_proveedor ORDER BY tipo_doc ASC";
                $resultado_consulta_documentos= $conn->query($consulta_documentos);
                // $row_consulta_documentos = $resultado_consulta_documentos->fetch_assoc();
               
                
                $consulta_validacion01 ="SELECT * FROM validacion WHERE id_ext = '$id_proveedor' AND tipo = 1";
                $resultado_consulta_validacion01= $conn->query($consulta_validacion01);
                $row_consulta_validacion01 = $resultado_consulta_validacion01->fetch_assoc();
                
                $consulta_validacion02 ="SELECT * FROM validacion WHERE id_ext = '$id_proveedor' AND tipo = 2";
                $resultado_consulta_validacion02= $conn->query($consulta_validacion02);
                $row_consulta_validacion02 = $resultado_consulta_validacion02->fetch_assoc();
                
                $consulta_validacion03 ="SELECT * FROM validacion WHERE id_ext = '$id_proveedor' AND tipo = 3";
                $resultado_consulta_validacion03= $conn->query($consulta_validacion03);
                $row_consulta_validacion03 = $resultado_consulta_validacion03->fetch_assoc();
                
                $consulta_validacion04 ="SELECT * FROM validacion WHERE id_ext = '$id_proveedor' AND tipo = 4";
                $resultado_consulta_validacion04= $conn->query($consulta_validacion04);
                $row_consulta_validacion04 = $resultado_consulta_validacion04->fetch_assoc();
                
                $consulta_observaciones ="SELECT * FROM observaciones WHERE id_ext = '$id_proveedor' ORDER BY seccion ASC";
                $resultado_consulta_observaciones= $conn->query($consulta_observaciones);
                // $row_consulta_observaciones = $resultado_consulta_observaciones->fetch_assoc();

              ?>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid" style="max-height: 100%;">
   
      <div class="jumbotron jumbotron-fluid" style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:0%; padding-top:45px; ">
        <div class="container-fluid">
        
          <h1 class="h1 text-secondary text-center">BIENVENIDO AL SISTEMA ADMINISTRADOR DE PROVEEDORES</h1>
          <p class="lead text-secondary text-center">DATOS DEL PROVEEDOR</p>
          <hr class="my-4">
          <main class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm bg-danger">
              <img class="me-3" src="../img/logo_white_inju.png" alt="" width="48" height="48" style="margin-right:18px">
              <div class="lh-1">
                <?php
                    if($row_consulta_proveedor['tipo_usr'] == 1){
                        echo '<h1 class="h6 mb-0 text-white lh-1 lead"><i class="bi bi-person"></i> | Persona física</h1>';
                    }
                    else{
                        echo '<h1 class="h6 mb-0 text-white lh-1 lead"><i class="bi bi-people"></i> | Persona moral</h1>';
                    }
                ?>
                <!-- <small><i class="bi bi-person"></i> Personas físicas</small> -->
              </div>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-person-lines-fill"></i> Datos</h6>
              <!-- <div class="d-flex text-muted pt-3"> -->
                  
                    <?php 
                        if($row_consulta_proveedor['tipo_usr'] == 1){
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>Nombre: </strong>'.$row_consulta_proveedor["fisc_apellido"].' '.$row_consulta_proveedor["fisc_nombre"];
                            echo '</p>';
                            echo '</div>';
                            
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>CURP: </strong>'.$row_consulta_proveedor["fisc_curp"];
                            echo '</p>';
                            echo '</div>';
                            
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>RFC: </strong>'.$row_consulta_proveedor["rfc"];
                            echo '</p>';
                            echo '</div>';
                        }
                        else{
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>Nombre: </strong>'.$row_consulta_proveedor["fisc_apellido"].' '.$row_consulta_proveedor["moral_razon"];
                            echo '</p>';
                            echo '</div>';
                            
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>CURP: </strong>'.$row_consulta_proveedor["moral_denominacion"];
                            echo '</p>';
                            echo '</div>';
                            
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>RFC: </strong>'.$row_consulta_proveedor["rfc"];
                            echo '</p>';
                            echo '</div>';
                            
                            echo '<div class="d-flex text-muted pt-3">';
                            echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                            echo '<strong>Acta constitutiva: </strong> <a href="../dashboard/'.$row_consulta_proveedor["moral_archivo_acta"].'" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i> Documento </a>';
                            echo '</p>';
                            echo '</div>';
                        }
                    ?>
                <hr>
                <small class="d-block text-end mt-3"><span><strong> Estatus:</strong> 
                
                <?php 
                  if($row_consulta_validacion01['validacion'] == 0){
                    echo '<span class="badge bg-secondary">No validado</span>';
                  }
                  elseif($row_consulta_validacion01['validacion'] == 1){
                    echo '<span class="badge bg-warning">En revisión</span>';
                  }
                  elseif($row_consulta_validacion01['validacion'] == 2){
                    echo '<span class="badge bg-primary">Validado</span>';
                  }
                ?>
                
                </span> | 
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-check-circle"></i> Validar</button>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalObservaciones1"><i class="bi bi-card-heading"></i> Observaciones</button>
              </small>    
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel01" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel01"><i class="bi bi-check-circle"></i> Validar datos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/validacion.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="1" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                          <select class="form-select" aria-label="Default select example" name="caja_validacion">
                            <option selected>Selecciona la validación</option>
                            <option value="1">En revisión</option>
                            <option value="2">Validado</option>
                          </select>
                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalObservaciones1" tabindex="-1" aria-labelledby="exampleModalObservaciones1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel01"><i class="bi bi-check-circle"></i> Observaciones datos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/observaciones.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="1" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                         
                        <div class="input-group">
                          <span class="input-group-text">Observaciones:</span>
                          <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                        </div>

                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-building"></i> Domicilio</h6>
                <?php
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Colonia: </strong>'.$row_consulta_domicilio["colonia"];
                    echo '</p>';
                    echo '</div>';
                    
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Código postal: </strong>'.$row_consulta_domicilio["cp"];
                    echo '</p>';
                    echo '</div>';
                    
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Número interior: </strong>'.$row_consulta_domicilio["n_int"];
                    echo '</p>';
                    echo '</div>';
                    
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Número exterior </strong>'.$row_consulta_domicilio["n_ext"];
                    echo '</p>';
                    echo '</div>';
                    
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Teléfono oficina: </strong>'.$row_consulta_domicilio["tel_of"];
                    echo '</p>';
                    echo '</div>';
                    
                    echo '<div class="d-flex text-muted pt-3">';
                    echo '<p class="pb-3 mb-0 lh-sm border-bottom">';
                    echo '<strong>Teléfono celular: </strong>'.$row_consulta_domicilio["tel_cel"];
                    echo '</p>';
                    echo '</div>';
                ?>
                <hr>
                <small class="d-block text-end mt-3"><span><strong> Estatus: </strong><?php 
                  if($row_consulta_validacion02['validacion'] == 0){
                    echo '<span class="badge bg-danger">No validado</span>';
                  }
                  elseif($row_consulta_validacion02['validacion'] == 1){
                    echo '<span class="badge bg-warning">En revisión</span>';
                  }
                  elseif($row_consulta_validacion02['validacion'] == 2){
                    echo '<span class="badge bg-primary">Validado</span>';
                  }
                ?>
                
                </span> | 
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLabel02"><i class="bi bi-check-circle"></i> Validar</button>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalObservaciones2"><i class="bi bi-card-heading"></i> Observaciones</button>

              </small>    
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLabel02" tabindex="-1" aria-labelledby="exampleModalLabel02" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel02"><i class="bi bi-check-circle"></i> Validar dirección</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/validacion.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="2" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                        <select class="form-select" aria-label="Default select example" name="caja_validacion">
                          <option selected>Selecciona la validación</option>
                          <option value="1">En revisión</option>
                          <option value="2">Validado</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                    </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalObservaciones2" tabindex="-1" aria-labelledby="exampleModalObservaciones2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel01"><i class="bi bi-check-circle"></i> Observaciones dirección</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/observaciones.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="2" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                         
                        <div class="input-group">
                          <span class="input-group-text">Observaciones:</span>
                          <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                        </div>

                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>

            </div>
           
            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-bank2"></i> Datos bancarios</h6>
                <div class="table-responsive">
                    <table class="table table-striped align-middle table-hover text-center">
                        <thead class="bg-dark text-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Banco</th>
                            <th scope="col">Cuenta</th>
                            <th scope="col">CLABE</th>
                            <th scope="col">Sucursal</th>
                            <th scope="col">Concepto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 0;
                            while($row_consulta_banco = $resultado_consulta_banco->fetch_assoc()){
                                $num ++;

                                echo '<tr>';

                                echo '<td>'.$num.'</td>';
                                echo '<td>'.$row_consulta_banco["banco"].'</td>';
                                echo '<td>'.$row_consulta_banco["no_cuenta"].'</td>';
                                echo '<td>'.$row_consulta_banco["no_clabe"].'</td>';
                                echo '<td>'.$row_consulta_banco["sucursal"].'</td>';
                                echo '<td>'.$row_consulta_banco["concepto"].'</td>';

                                echo '</tr>';
                            }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <small class="d-block text-end mt-3"><span><strong> Estatus:</strong><?php 
                  if($row_consulta_validacion03['validacion'] == 0){
                    echo '<span class="badge bg-danger">No validado</span>';
                  }
                  elseif($row_consulta_validacion03['validacion'] == 1){
                    echo '<span class="badge bg-warning">En revisión</span>';
                  }
                  elseif($row_consulta_validacion03['validacion'] == 2){
                    echo '<span class="badge bg-primary">Validado</span>';
                  }
                ?>
                
                </span> | 
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLabel03"><i class="bi bi-check-circle"></i> Validar</button>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalObservaciones3"><i class="bi bi-card-heading"></i> Observaciones</button>

              </small>    
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLabel03" tabindex="-1" aria-labelledby="exampleModalLabel03" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel03"><i class="bi bi-check-circle"></i> Validar cuentas bancarias</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/validacion.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="3" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                        <select class="form-select" aria-label="Default select example" name="caja_validacion">
                          <option selected>Selecciona la validación</option>
                          <option value="1">En revisión</option>
                          <option value="2">Validado</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalObservaciones3" tabindex="-1" aria-labelledby="exampleModalObservaciones3" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel01"><i class="bi bi-check-circle"></i> Observaciones cuentas bancarias</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/observaciones.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="3" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                         
                        <div class="input-group">
                          <span class="input-group-text">Observaciones:</span>
                          <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                        </div>

                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>

            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-file-post"></i> Documentos</h6>
                <div class="table-responsive">
                    <table class="table table-striped align-middle table-hover">
                        <thead class="bg-dark text-light">
                            <tr>
                           
                            <th class="text-center">#</th>
                            <th>Tipo documento</th>
                            <th class="text-center">Documento</th>
                            <th class="text-center">Vigencia</th>
                            <th class="text-center">Actualización</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php
                            $num = 0;
                            while($row_consulta_documentos = $resultado_consulta_documentos->fetch_assoc()){
                                $num ++;

                                echo '<tr>';
                                echo '<td class="text-center">'.$num.'</td>';
                                
                                // echo '<td>'.$row_consulta_documentos["ruta"].'</td>';
                                
                                if($row_consulta_documentos["tipo_doc"]==1){
                                  echo '<td>RCB-1</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==2){
                                  echo '<td>Cédula de proveedores</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==3){
                                  echo '<td>Constancia fiscal</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==4){
                                  echo '<td>Comprobante de domicilio</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==5){
                                  echo '<td>Carátula de estado de cuenta bancaria</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==6){
                                  echo '<td>INE</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==7){
                                  echo '<td>Formato D-32</td>';
                                }
                                elseif($row_consulta_documentos["tipo_doc"]==8){
                                  echo '<td>Opinión fiscal estatal *</td>';
                                }
                                // else{
                                //   echo '<td>Archivo no cargado</td>';
                                // }

                                echo '<td class="text-center"><a href="../dashboard/'.$row_consulta_documentos["ruta"].'" target="_blank"><i class="bi bi-cloud-arrow-down-fill h5"></i></a></td>';
                                echo '<td class="text-center">'.$row_consulta_documentos["vigencia"].'</td>';
                                echo '<td class="text-center">'.$row_consulta_documentos["fecha_actualizado"].'</td>';

                                echo '</tr>';
                            }
                                
                            ?>
                          
                        </tbody>
                    </table>
                </div>
                <hr>
                <small class="d-block text-end mt-3"><span><strong> Estatus:</strong><?php 
                  if($row_consulta_validacion04['validacion'] == 0){
                    echo '<span class="badge bg-danger">No validado</span>';
                  }
                  elseif($row_consulta_validacion04['validacion'] == 1){
                    echo '<span class="badge bg-warning">En revisión</span>';
                  }
                  elseif($row_consulta_validacion04['validacion'] == 2){
                    echo '<span class="badge bg-primary">Validado</span>';
                  }
                ?>
                
                </span> | 
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLabel04"><i class="bi bi-check-circle"></i> Validar</button>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalObservaciones4"><i class="bi bi-card-heading"></i> Observaciones</button>

              </small>    
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLabel04" tabindex="-1" aria-labelledby="exampleModalLabel04" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel04"><i class="bi bi-check-circle"></i> Validar documentos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/validacion.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="4" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                        <select class="form-select" aria-label="Default select example" name="caja_validacion">
                          <option selected>Selecciona la validación</option>
                          <option value="1">En revisión</option>
                          <option value="2">Validado</option>
                        </select>
                     

                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                      </div>
                      </form>
                  </div>
                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalObservaciones4" tabindex="-1" aria-labelledby="exampleModalObservaciones4" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel01"><i class="bi bi-check-circle"></i> Observaciones documentos</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="prcd/observaciones.php" method="POST">
                        <input type="text" name="validacion" id="validacion" value="4" HIDDEN>
                        <input type="text" name="proveedor" id="proveedor" value="<?echo $id_proveedor ?>" HIDDEN>
                         
                        <div class="input-group">
                          <span class="input-group-text">Observaciones:</span>
                          <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                        </div>

                      </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      
                        </div>
                        </form>
                  </div>
                </div>
              </div>

            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
              <h6 class="border-bottom pb-2 mb-0"><i class="bi bi-card-heading"></i> Observaciones</h6>
                <div class="table-responsive">
                    <table class="table table-striped align-middle table-hover">
                        <thead class="bg-dark text-light">
                            <tr>
                              <th class="text-center">#</th>
                              <th>Sección</th>
                              <th class="text-center">Observaciones</th>
                              <th class="text-center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php
                            $num = 0;
                            while($row_consulta_observaciones = $resultado_consulta_observaciones->fetch_assoc()){
                                $num ++;

                                echo '<tr>';
                                echo '<td class="text-center">'.$num.'</td>';
                                
                                // echo '<td>'.$row_consulta_documentos["ruta"].'</td>';
                                
                                if($row_consulta_observaciones["seccion"]==1){
                                  echo '<td>Datos personales</td>';
                                }
                                elseif($row_consulta_observaciones["seccion"]==2){
                                  echo '<td>Dirección</td>';
                                }
                                elseif($row_consulta_observaciones["seccion"]==3){
                                  echo '<td>Cuentas bancarias</td>';
                                }
                                elseif($row_consulta_observaciones["seccion"]==4){
                                  echo '<td>Documentos</td>';
                                }

                                echo '<td class="text-center">'.$row_consulta_observaciones["observaciones"].'</td>';
                                echo '<td class="text-center"><i class="bi bi-trash-fill"></i></td>';
                                echo '</tr>';
                            }
                                
                            ?>
                          
                        </tbody>
                    </table>
                </div>
                <hr>
                
                
                

             
             

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
