<?php
  session_start();

  if (!empty($_SESSION['active'])) {
    header('Location: admin/');
    $_SESSION['nombre'];
  } else if (!empty($_SESSION['activeP'])) {
    header('Location: escuela/');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="shortcut icon" href="assets/Icon_logo.png" type="image/x-icon">
    <!-- Font-icon css-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Inicio de Sesion - SIRACBIT</title>
  </head>
  <body>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">
      <div class="logo">
        <!-- <h1>SIRACBIT</h1> -->
         <img src="assets/Logo.png" alt="" width="300px">
      </div>


      <div id="msjAdmin"></div>

      <div id="msjProfesor"></div>

      <nav class="nav bg-white col-md-5 justify-content-center" style="border-radius: 15px 15px 0 0;">

        <div class="nav nav-tabs " id="nav-tab" role="tablist">

          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-admin" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><h4>Administrador</h4></button>

          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-escuela" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style=""><h4>Escuela</h4></button>

          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-tecnico" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style=""><h4>Tecnico</h4></button>

          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profesor" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" style=""><h4>Profesor</h4></button>

        </div>

      </nav>

      

      <div class="login-box col-md-5" style="border-radius: 0 0 15px 15px;">
      

<!-- FORMULARIO DE INGRESO DE ADMINISTRADOR -->
        
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-admin" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            
            <form class="login-form" action="" onsubmit="return validar()">

              <h3 class="login-head"><i class="bi bi-person me-2"></i>INICIAR SESION</h3>
              <div class="mb-3">
                <label class="form-label">USUARIO</label>
                <input class="form-control" name="user" id="user" type="text" placeholder="Ingrese su usuario de Administrador" autofocus>
              </div>

              <div class="mb-3">
                <label class="form-label">CONTRASEÑA</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Ingrese su contraseña">
              </div>

              

              <div class="mb-3 btn-container d-grid">

                <button class="btn btn-primary btn-block" id="loginAdmin" type="button"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>

              </div>

            </form>

          </div>

          <!-- FORMULARIO DE INGRESO DE ESCUELA -->

          <div class="tab-pane fade" id="nav-escuela" role="tabpanel" aria-labelledby="nav-escuela-tab" tabindex="0">

            <form class="login-form" action="">

              <h3 class="login-head"><i class="bi bi-person me-2"></i>INICIAR SESION</h3>
              <div class="mb-3">
                <label class="form-label">USUARIO</label>
                <input class="form-control" name="userEscuela" id="userEscuela" type="text" placeholder="Ingrese su usuario de Maestro" autofocus>
              </div>

              <div class="mb-3">
                <label class="form-label">CONTRASEÑA</label>
                <input class="form-control" name="passwordEscuela" id="passwordEscuela" type="password" placeholder="Ingrese su contraseña">
              </div>

              <div class="mb-3 btn-container d-grid">

                <button class="btn btn-primary btn-block" id="loginEscuela" type="button"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>

              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="nav-tecnico" role="tabpanel" aria-labelledby="nav-tecnico-tab" tabindex="0">
            
            <form class="login-form" action="">

              <h3 class="login-head"><i class="bi bi-person me-2"></i>INICIAR SESION</h3>
              <div class="mb-3">
                <label class="form-label">USUARIO</label>
                <input class="form-control" name="userTecnico" id="userTecnico" type="text" placeholder="Ingrese su usuario de Administrador" autofocus>
              </div>

              <div class="mb-3">
                <label class="form-label">CONTRASEÑA</label>
                <input class="form-control" name="passwordTecnico" id="passwordTecnico" type="password" placeholder="Ingrese su contraseña">
              </div>

              

              <div class="mb-3 btn-container d-grid">

                <button class="btn btn-primary btn-block" id="loginTecnico" type="button"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>

              </div>

            </form>

          </div>

          <div class="tab-pane fade" id="nav-profesor" role="tabpanel" aria-labelledby="nav-profesor-tab" tabindex="0">
            
            <form class="login-form" action="">

              <h3 class="login-head"><i class="bi bi-person me-2"></i>INICIAR SESION</h3>
              <div class="mb-3">
                <label class="form-label">USUARIO</label>
                <input class="form-control" name="userProfesor" id="userProfesor" type="text" placeholder="Ingrese su usuario de Administrador" autofocus>
              </div>

              <div class="mb-3">
                <label class="form-label">CONTRASEÑA</label>
                <input class="form-control" name="passwordProfesor" id="passwordProfesor" type="password" placeholder="Ingrese su contraseña">
              </div>

              

              <div class="mb-3 btn-container d-grid">

                <button class="btn btn-primary btn-block" id="loginProfesor" type="button"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </section>


    <!-- Essential javascripts for application to work-->
    
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>