<?php
require_once 'funciones_login.php';
//var_dump($_SESSION);

if($_POST) {
  //convierto en array el json que me traigo con file_get_contents
  $usuariosArray = traerUsuariosDelJson();

  //hago un foreach para recorrer la lista de todos los usuarios y buscar al que se quiere loguear
  //cada posición de ese array va a ser un usuario
  foreach($usuariosArray as $usuario) {

    // Encuentro uno con el email que me llega por $_POST
    if($_POST["email"] == $usuario["email"]) {

      // valido que las contraseñas coincidan
      if(password_verify($_POST["password"], $usuario["password"])) {

        session_start();
        $_SESSION["userLoged"] = $usuario;
        if (isset($_POST['rememberUser'])) {
          setcookie('userLoged', $usuario["email"], time() + 3600 * 24 * 7);
        }
        header('Location: perfil.php');
      }
    }
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--<link rel="stylesheet" href="css/bootstrap-grid.min.css">-->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">

      <link rel="stylesheet" href="css/registro.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous">

  </head>
    <body>
      <div class="container">
        <!-- Inicio del HEADER (contiene solo logo y telefonos) -->
        <?php include("header.php")?>
        <!-- Fin del HEADER -->

        <!-- Inicio del NAVBAR -->
          <?php include("navbar.php")?>
        <!-- Fin del NAVBAR -->


 <div class="container1">
  <div class="row">

<!-- principio de inicio de sesion -->
   <div class="col-12">
     <form class="formulario" action="login.php" method="post">


        <h2>Inicie sesión</h2>

        <label class="campo-formulario">
            <input type="email" name="email" value=""placeholder="Email" required>
        </label>

        <label class="campo-formulario">
            <input type="password" name="password" value="" placeholder="Contraseña"required>
        </label>

        <label>
           <button class="boton"type="submit" name="button">Iniciar sesión</button>
        </label>
<!--  boton de recordarme -->
      <div class="form-check">
       <input type="checkbox" class="form-check-input" name="rememberUser">
       <label class="form-check-label" for="dropdownCheck">
         Recordarme
       </label>
      </div>
<!-- Fin boton de recordarme -->
       <a href="registro.php">No tenes cuenta? registrate acá</a>

       </form>
     </div>
    </div>
  </div>

 <!--  final de inicio de sesion-->


 <!-- Inicio FOOTER -->
 <?php include("footer.php") ?>
 <!-- Fin FOOTER -->



<!-- Código javascript de jquery para poder usar boostrap -->
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous">

</script>

<!-- Código javascript de bootstrap -->
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
crossorigin="anonymous">
</script>


  </body>
</html>
