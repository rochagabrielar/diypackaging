<?php require_once("lista_productos.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous">
      <link rel="stylesheet" href="./css/home.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous">
    <title>Productos</title>
  </head>

  <body>
    <div class="container">

      <?php include("header.html");?>
      <?php include("navbar.html");?>


    <!-- Inicio de productos-->

      <h4>Nuestros productos</h4>
      <div class="sellers sellers-prod">

           <div class="row mx-0">
             <div class="card-deck">
              <?php foreach ($productos as $Producto): ?>
                   <div class="card">
                    <img  src= <?= $Producto["imagen"] ?> width="100%"  height="250px">
                     <div style= "background-color: #efe4d5; align-content: center;" class="card-body">
                           <h5 style= "color: #bfb29f; text-align: center;" class="card-title"><?= $Producto["nombre"] ?></h5>
                         <p class="card-text"><small class="text-muted">Ref 2313</small></p>
                         <!-- <strong style="color: red"><?= $Producto["precio"] ?></strong> -->
                         <a href="#" class="btn btn-newsletter">Comprar</a>
                     </div>
                   </div>
               <?php endforeach; ?>
             </div>
           </div>
         </div>


      <?php include("footer.html");?>




  <!-- jquery para poder usar boostrap -->
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

</div>
  </body>
</html>
