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

      <title>DIY - FAQ</title>
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
               <a href="registro.php"><i class="fa fa-user pr-3"></i></a>
               <span class="icons-separator"></span>
               <i class="fa fa-shopping-cart pl-3"></i>
             </div>
           </div>
          </div>
        </header>
        <!-- Fin del HEADER -->

        <!-- Inicio del NAVBAR -->
          <!-- Ver clases de boostrap para hacer un navbar https://getbootstrap.com/docs/4.0/components/navbar/#how-it-works -->
        <nav class="navbar navbar-expand-lg navbar-light text-center">
          <!-- <a class="navbar-brand" href="#">Navbar</a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cajas de Cartón <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cajas Personalizadas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Inspiración</a>
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
        <!-- Inicio del FAQ -->
        <!-- Inicio Intro del FAQ -->
        <br>
        <h4>
        Estamos para ayudarte</h4>
        <br>
        <!-- Fin Intro del FAQ -->
        <!-- Inicio Preguntas del FAQ -->

        <div class="accordion" id="accordionExample">


          <!-- Inicio Pregunta 1 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Cómo hago mi pedido?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <p>Comprar en <strong>DIY packaging</strong> es muy fácil. Simplemente elegí los productos que quieras comprar, seleccioná la cantidad que necesitás y presioná "Comprar" para confirmar la compra.</p>
        <p>Para comprar en <strong>DIY Packaging</strong> no necesitás registrarte previamente. Podés pasear por nuestra web, elegir el packaging que más te guste y luego iniciar la compra sin necesidad de registrarte. Una vez que comiences el proceso de compra, la misma web te irá pidiendo los datos necesarios para el pago, la facturación y el envío de tu pedido, y al final de dicho proceso habrás quedado debidamente registrado.</p>

        <p>Por supuesto, en cualquier momento podrás acceder a tu cuenta para modificar o eliminar tus datos. Y cualquier inquietud que tengas podés escribirnos a <a href="mailto:consultas@consultas.com.ar"> consultas@consultas.com.ar</a> o llamarnos al 115555.5555.</p>

        <p>Todos nuestros precios están expresados sin IVA. Al momento de la compra te pediremos tus datos fiscales para generar una factura a nombre de tu empresa. Si sos consumidor final, se aplicará el IVA correspondiente.</p>

      </div>
    </div>
  </div>
  <!-- Fin Pregunta 1 del FAQ. -->
  <!-- Inicio Pregunta 2 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Formas de envío
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">

        <p><b>Encomiendas:</b> Si vivís en el interior de Argentina podemos enviarte tu compra por encomienda desde Retiro.</p>
        <p><b>Envíos por mensajería:</b> Si estás en la Ciudad de Buenos Aires, tenés la opción de recibir tu pedido por mensajería.</p>
        <p><b>Visitanos en nuestro local:</b> Vení a conocernos y retirá tu compra personalmente. Te esperamos en Lima 1111, CABA.
        </p>
        <p align=center>          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3311393278627!2d-58.38386198476982!3d-34.621071280455006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses!2sar!4v1556319128386!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </p>

      </div>
    </div>
  </div>
  <!-- Fin Pregunta 2 del FAQ. -->
  <!-- Inicio Pregunta 3 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ¿Cuándo recibiré mi compra?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <p>El tiempo de envío depende del lugar en el que te encuentres y el método de entrega que elijas.
          Por nuestra parte, nos comprometemos a despachar los pedidos en menos de 48 horas hábiles.</p><p>Es importante que tengas en cuenta que el día en que se realiza el pedido no cuenta como día laborable, si el pedido se realiza después de las 11 de la mañana.</p>

<p>¡Atención! Para pedidos especiales, con impresión, la entrega tomará 5 días hábiles.</p>

<p>En el año existen épocas de alta demanda (promociones puntuales, black friday, Navidad, etc) que pueden retrasar los envíos algunos días.</p>
      </div>
    </div>
  </div>
  <!-- Fin Pregunta 3 del FAQ. -->
  <!-- Inicio Pregunta 4 del FAQ. -->

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Política de devolución
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <p>En DIY Packaging aceptamos devoluciones o cambios dentro del plazo de 14 días hábiles a partir de la recepción del producto, para compras mayores a los $250. Una vez devuelto el producto se creará un vale de descuento que podrás usar en tu próxima compra.</p>

        <p>Para coordinar el cambio o la devolución envianos un correo a consultas@consultas.com.ar indicando el número de pedido. Así podremos enviarte el instructivo para hacer la devolución.</p>
      </div>
    </div>
  </div>
  <!-- Fin Pregunta 4 del FAQ. -->


</div>

        <!-- Fin Preguntas del FAQ -->

        <!-- Inicio de SOCIAL and Newsletter -->

        <div class="social-newsletter">
          <h4>Newsletter</h4>
          <div class="row">
            <div class="col-md-8">
              <!-- Clases de Boostrap para usar el formulario en linea https://getbootstrap.com/docs/4.0/components/forms/#readonly-plain-text-->
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

    </body>
  </html>
