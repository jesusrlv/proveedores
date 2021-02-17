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

include('/conn.php');

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
    <title>Dashboard | PROCYON</title>

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
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-light text-dark">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-white" href="#">
    <!-- <img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h5 class="text-center text-dark display-7" style="margin-left:3px;"><b>INJUVENTUD</b></h5>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a href="" class="text-left">Inicio ></a> -->
  <!-- <input class="form-control form-control-dark w-10" type="text" placeholder="Search" aria-label="Search" style="width:30%"> -->
  
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
        <a class="btn btn-outline-secondary" href="prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="../img/logo.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">

          <span class="">
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
            <a class="nav-link" href="datos.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Datos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="direccion.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Dirección
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datos_bancarios.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Datos bancarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentos.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Documentos
            </a>
          </li>
         
          
        </ul>

    
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="h1">DASHBOARD</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h4 class="text-primary" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h4>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%;border-radius:5px;  margin-top:25px; padding-top:45px;">
        <div class="container-fluid">
          <h1 class="h1">SECCIÓN 4</h1>
          <p class="lead">Documentos</p>
          <hr class="my-4">
          <!-- <p>Cargar documentos</p>
          <a class="btn btn-primary btn-lg" href="agregar_bitacora.php" role="button"> <i class="fas fa-file-pdf"></i> Subir a bitácora -></a> -->

            <div class="alert alert-secondary" role="alert">
                <a href=""><i class="bi bi-file-binary-fill"></i> Descargar Formato RCB-1</a>
            </div>
        <hr class="my-4">

        <div class="row">
                <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Documentos de proveedor</h4>

       

        <!-- box tool -->

        <div class="box-body table-responsive no-padding">
              <table class="table table-hover text-center">
                <thead class="text-center align-middle">
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Cargar archivo</th>
                  <th>Acción</th>
                  <th>Status</th>
                  <th>Descripción del archivo</th>
                </thead>
                <tr>
                  <td>1</td>
                  <td>Carta de aceptación</td>
<!--                  <td><input type="file" id="exampleInputFile"></td>-->
                 
                 <script type="text/javascript">
                
                     function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var file = _("file1").files[0];
  // alert(file.name+" | "+file.size+" | "+file.type);
  var formdata = new FormData();
  formdata.append("file1", file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "file_upload_parser.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
  //ARCHIVO CON EL PROCEDIMIENTO PARA MOVER EL DOCUMENTO AL SERVIDOR
  ajax.send(formdata);
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}
                    
                </script>
                 
                  <td><form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                  <td><span class="label label-success"><span class="badge badge-pill badge-primary"><i class="bi bi-check-circle-fill"></i> Cargado</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Carta propuesta</td>
                  <td><input type="file" id="exampleInputFile"></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                 <td><span class="label label-success"><span class="badge badge-pill badge-warning"><i class="bi bi-check-circle-fill"></i> Pendiente</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Credencial de elector</td>
                  <td><input type="file" id="exampleInputFile"></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                 <td><span class="label label-success"><span class="badge badge-pill badge-warning"><i class="bi bi-check-circle-fill"></i> Pendiente</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>CURP</td>
                  <td><input type="file" id="exampleInputFile"></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                 <td><span class="label label-success"><span class="badge badge-pill badge-warning"><i class="bi bi-check-circle-fill"></i> Pendiente</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Comprobante de domicilio</td>
                  <td><input type="file" id="exampleInputFile"></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                 <td><span class="label label-success"><span class="badge badge-pill badge-primary"><i class="bi bi-check-circle-fill"></i> Cargado</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Currículum Vitae</td>
                  <td><input type="file" id="exampleInputFile"></td>
                 <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                 <td><span class="label label-success"><span class="badge badge-pill badge-primary"><i class="bi bi-check-circle-fill"></i> Cargado</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Video</td>
                  <td><input type="file" id="exampleInputFile"></td>
                  <td><button type="button" class="btn btn-block btn-success btn-xs"><i class="fa fa-cloud-upload"></i> Guardar</button></td>
                  <td><span class="label label-success"><span class="badge badge-pill badge-primary"><i class="bi bi-check-circle-fill"></i> Cargado</span></span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </table>
              
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Calificar</button> -->
              </div>
              
              <!-- <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cargar archivo</h4>
              </div>
              <div class="modal-body">
                <p><label for="exampleInputFile">Seleeciona el documento</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">No tiene que exceder los 60Mb</p></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
              </div>
            </div> -->
            <!-- /.modal-content -->
            
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
            </div>

        <!-- box tool -->

        <!-- interno -->
        
            

                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Terminar Sección 2 <i class="bi bi-skip-forward-fill"></i></button>
                <a type="button" class="btn btn-danger btn-lg btn-block" href="dashboard.php"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
            </form>
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
