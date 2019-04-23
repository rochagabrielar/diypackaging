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

      <title>DIY</title>
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
               <i class="fa fa-user pr-3"></i>
               <span class="icons-separator"></span>
               <i class="fa fa-shopping-cart pl-3"></i
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

        <!-- Inicio del CAROUSEL -->
          <!-- Ver clases de bootstrap para el Carousel https://getbootstrap.com/docs/4.0/components/carousel/#with-controls -->
        <div id="dyi-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/carousel/img1.jpg" class="d-block w-100" alt="img-1">
            </div>
            <div class="carousel-item">
              <img src="./img/carousel/img2.jpg" class="d-block w-100" alt="img-2">
            </div>
            <div class="carousel-item">
              <img src="./img/carousel/img3.jpg" class="d-block w-100" alt="img-3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#dyi-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#dyi-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
        <!-- Fin del CAROUSEL -->

        <!-- Inicio MÁS VENDIDOS -->
        <div class="sellers">
          <h4>Más vendidos</h4>
          <!-- card-deck + card son clases de bootstrap para armar tarjetas
          ver más info acá: https://getbootstrap.com/docs/4.0/components/card/#card-decks
          un card-deck es un contenedor para cards (se implementa a través de clases)-->
          <div class="card-deck">
            <div class="card">
              <img src="./img/mas-vendidos/img1.jpg" class="card-img-top" alt="img-1">
              <div class="card-body">
                <h5 class="card-title">Producto 1</h5>
                <p class="card-text"><small class="text-muted">Ref 2313</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/mas-vendidos/img2.jpg" class="card-img-top" alt="img-2">
              <div class="card-body">
                <h5 class="card-title">Producto 2</h5>
                <p class="card-text"><small class="text-muted">Ref 2314</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/mas-vendidos/img3.jpg" class="card-img-top" alt="img-3">
              <div class="card-body">
                <h5 class="card-title">Producto 3</h5>
                <p class="card-text"><small class="text-muted">Ref 2315</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/mas-vendidos/img3.jpg" class="card-img-top" alt="img-4">
              <div class="card-body">
                <h5 class="card-title">Producto 4</h5>
                <p class="card-text"><small class="text-muted">Ref 2316</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/mas-vendidos/img1.jpg" class="card-img-top" alt="img-5">
              <div class="card-body">
                <h5 class="card-title">Producto 5</h5>
                <p class="card-text"><small class="text-muted">Ref 2317</small></p>
              </div>
            </div>
            <div class="card">
              <img src="./img/mas-vendidos/img2.jpg" class="card-img-top" alt="img-6">
              <div class="card-body">
                <h5 class="card-title">Producto 6</h5>
                <p class="card-text"><small class="text-muted">Ref 2318</small></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin MÁS VENDIDOS -->

        <!-- Inicio DESTACADOS -->
        <div class="destacados">
          <h4>Destacados</h4>
          <!-- Fila con productos (Sólo imagen) -->
          <div class="row">
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img1.jpg" alt="">
            </div>
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img2.jpg" alt="">
            </div>
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img3.jpg" alt="">
            </div>
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img4.jpg" alt="">
            </div>
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img1.jpg" alt="">
            </div>
            <div class="col-6 col-md-4 destacados-product">
              <img src="./img/destacados/img2.jpg" alt="">
            </div>
          </div>

        </div>
        <!-- Fin DESTACADOS -->
        <!-- Inicio de IDEAS -->
        <div class="ideas">
          <h4>Ideas</h4>
          <div class="row">
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img3.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img3.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-4 col-sm-2 ideas-product">
              <img src="./img/ideas/img2.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <!-- Fin de IDEAS -->
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
      <footer class="page-footer font-small blue pt-4">
          <!-- Footer Links -->
          <div class="container-fluid text-left">
            <!-- Inicia FILA -->
            <div class="row">
              <!-- Inicia Columna 1 - Ocupa 6 a partir de MD y tiene padding-left: 0 -->
              <div class="col-md-6 pl-0">
                <!-- Content -->
                <h4>Footer</h5>
                <p>Links organizados en columnas</p>
              </div>
              <!-- Fin columna 1 -->
              <!--  Separador que solo se ve hasta MD-->
              <hr class="clearfix w-100 d-md-none pb-3">
              <!-- Inicia columna 2 -->
              <div class="col-md-3 pl-0">
                  <!-- Links -->
                  <h5 class="text-uppercase">Links Izquierda</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Link 1</a>
                    </li>
                    <li>
                      <a href="#!">Link 2</a>
                    </li>
                    <li>
                      <a href="#!">Link 3</a>
                    </li>
                    <li>
                      <a href="#!">Link 4</a>
                    </li>
                  </ul>
                </div>
                <!-- Fin columna 2 -->
                <!-- Inicia columna 3 -->
                <div class="col-md-3 pl-0">
                  <!-- Links -->
                  <h5 class="text-uppercase">Links Derecha</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#!">Link 1</a>
                      </li>
                      <li>
                        <a href="#!">Link 2</a>
                      </li>
                      <li>
                        <a href="#!">Link 3</a>
                      </li>
                      <li>
                        <a href="#!">Link 4</a>
                      </li>
                    </ul>
                  </div>
                  <!-- Fin columna 3 -->
            </div>
            <!-- Termina fila -->
          </div>
          <!-- Footer Links -->
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
