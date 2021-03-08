<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include('/dashboard/prcd/conn.php')
    ?>
  

  <title>Padrón de proveedores</title>
  <link rel="icon" type="image/png" href="img/icon.ico"/>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

  <!-- script validate -->
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {	
      $('#username').on('blur', function() {
          $('#result-username').html('<img src="images/loader.gif" />').fadeOut(1000);
  
          var username = $(this).val();		
          var dataString = 'username='+username;
  
          $.ajax({
              type: "POST",
              url: "verificacion.php",
              data: dataString,
              success: function(data) {
                  $('#result-username').fadeIn(1000).html(data);
              }
          });
      });              
  });    
  </script>
  <!-- script validate -->

  

</head>

<body class="text-center" style="background-image: url(img/fondo.jpg); background-repeat: no-repeat;background-attachment: fixed;  
background-size: cover;">

<!-- <form class="form-signin" action="dashboard.html" method="POST" name="envio"> -->
<form class="form-signin" action="prcd/proceso_validacion.php" name="envio" method="POST">
  <img class="mb-4" src="img/logo.png" alt="" width="180px" height="180px">
  <h3>Padrón de proveedores</h3>
  <hr>
  <h1 class="h4 mb-3 font-weight-normal">Ingresar</h1>
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" name="usr" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="pwd" required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="Submit" type="submit"><i class="fas fa-user-lock"></i> Acceder</button>
  
  <hr>
  <h1 class="h4 mb-3 font-weight-normal">Registro</h1>
  <!-- <button class="btn btn-lg btn-warning btn-block" name="Submit" type="submit"><i class="fas fa-user-plus"></i> Registrarse</button> -->
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> Registrarse</button>
  <hr>
  <p class="mt-5 mb-3 text-muted">&copy; 2021 | INJUVENTUD</p>
</form>





</body>


</html>

<!--MODAL-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i> Registro de proveedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Formulario</h4>

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre completo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Se generará un usuario para ingresar a la plataforma</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Este será el usuario para acceder a la plataforma y se enviará un correo con tus datos.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="cla1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Teclear nuevamente la contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="cla2">
          </div>
          
          <button type="submit" class="btn btn-primary">Registrar</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!--MODAL-->

<script type="text/javascript">
  function validar_clave(e) {

    var caract_invalido = " ";
    var caract_longitud = 6;
    var cla1 = $('#register-form #password').val();
    var cla2 = $('#register-form #confirm-password').val();
    if (cla1 == '' || cla2 == '') {
      alert('Debes introducir tu clave en los dos campos.');
      //document.registro
      e.preventDefault();
      return false;
    }
    if (cla1.length < caract_longitud) {
      alert('Tu clave debe constar de ' + caract_longitud + ' carácteres.');
      //document.registro
      e.preventDefault();
      return false;
    }
    if (cla1.indexOf(caract_invalido) > -1) {
      alert("Las claves no pueden contener espacios");
      //document.registro
      e.preventDefault();
      return false;
    } else {
      if (cla1 != cla2) {
        alert("Las claves introducidas no son iguales");
        //document.registro
        e.preventDefault();
        return false;
      } else {
        alert('Contraseña correcta');
        //$('#register-form').trigger('submit');
        return true;
      }
    }
  }

  $(function() {

    $('#login-form-link').click(function(e) {
      $("#login-form").delay(100).fadeIn(100);
      $("#register-form").fadeOut(100);
      $('#register-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
      $("#register-form").delay(100).fadeIn(100);
      $("#login-form").fadeOut(100);
      $('#login-form-link').removeClass('active');
      $(this).addClass('active');
      e.preventDefault();
    });

    $('#register-form').submit(function(e) {
      validar_clave(e);
    });
  });
</script>

