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
        <header>
          <div class="topbar">
           <div class="row">
             <div class="col-4 phone">
               +4234234234
             </div>
             <div class="col-4 text-center">
               <img src="./img/logo-diy.png" alt="" class="logo">
             </div>

             <div class="col-4 text-right">
                <!--Ocultamos el user
               <a href="registro.php"><i class="fa fa-user pr-3"></i></a> -->
               <span class="icons-separator"></span>
               <i class="fa fa-shopping-cart pl-3"></i
             </div>
           </div>
          </div>
        </header>
        <!-- Fin del HEADER -->

        <!-- Inicio del NAVBAR -->
          <!-- Ver clases de boostrap para hacer un navbar
          https://getbootstrap.com/docs/4.0/components/navbar/#how-it-works -->
        <nav class="navbar navbar-expand-lg navbar-light text-center">
          <!-- <a class="navbar-brand" href="#">Navbar</a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php" target="_blank">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="personalizado.php">Diseño personalizado<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="accesorios.php">Accesorios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq.php">Preguntas frecuentes</a>
              </li>
            </ul>
            <form class="form-inline">
              <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-search" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </nav>
        <!-- Fin del NAVBAR -->
      <!--  principio del registro-->
 <div class="container">
  <div class="row">
    <div class=" col-12 col-lg-6 ">
      <form class="formulario" action="index.html" method="post">
        <div class="col-12 col-md-6">
           <h2>Registrarse </h2>
         </div>
        <div class="row">
           <div class="col-12 col-md-6">
            <label for="nombre">
              <input id="nombre" type="" name="nombre" value="" placeholder="Nombre" required>
         </label>
             <label for="surname">
              <input id="surname" type="text" name="surname" value="" placeholder="Apellido" required>
           </label>
      </div>
          <div class="col-12 col-md-6">
            <label for="email">
              <input id="email"type="email" name="email" value=""placeholder="Email" required>
           </label>
              <label for="pass">
              <input id="pass"type="password" name="pass" value="" placeholder="Contraseña"required>
           </label>
        </div>
      </div>

      <div class="col-12 ">
        <button class="boton"type="submit" name="button">Crear cuenta</button>
      </div>
  </form>
  </div>
<!--  final del registro-->

<!-- principio de inicio de sesion -->

  <div class="col-12 col-lg-6">
  <form class="formulario" action="index.html" method="post">
    <div class="row">
      <div class="col-12 ">
        <h2>Inicie sesión</h2>
      </div>
    </div>
        <div class="row">
      <div class="col-12 ">
        <label for="email">
            <input id="email"type="email" name="email" value=""placeholder="Email" required>
        </label>
        <label for="pass">
            <input id="pass"type="password" name="pass" value="" placeholder="Contraseña"required>
        </label>
      </div>
  </div>
      <div class="col-12 ">
        <button class="boton"type="submit" name="button">Iniciar sesión</button>
      </div>
     </form>
    </div>
  </div>
</div>
 <!--  final de inicio de sesion-->
 <!-- Inicio de SOCIAL and Newsletter -->

 <div class="social-newsletter">
   <h4>Newsletter</h4>
   <div class="row">
     <div class="col-md-8">
       <!-- Clases de Boostrap para usar el formulario en linea
       https://getbootstrap.com/docs/4.0/components/forms/#readonly-plain-text-->
       <form action="" method="">
         <div class="form-group row">
           <div class="col-sm-9">
             <input type="email" class="form-control" id="newsletter-email" placeholder="Ingresa tu correo">
           </div>
           <div class="col-sm-2">
             <button type="submit" class="btn btn-newsletter">Suscribirse</button>
           </div>
         </div>
       </form>
     </div>
     <!-- Uso íconos de fontawesome y los agrando usando la clase fa-2x -->
     <div class="col-md-4 social-networks">
       <i class="fab fa-facebook-f fa-2x"></i>
       <i class="fab fa-twitter fa-2x"></i>
       <i class="fab fa-instagram fa-2x"></i>
     </div>
   </div>
 </div>
 <!-- Fin de SOCIAL and Newsletter -->

 <!-- Inicio FOOTER -->
<footer class="pt-4">

   <!-- Copyright -->
   <div class="footer-copyright py-3">© 2019 Copyright:
     <a href="#"> DIY Packaging </a>
   </div>
   <!-- Copyright -->
 </footer>
 <!-- Fin FOOTER -->

</div>

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
