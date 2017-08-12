<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    

    // Never use md5 to store passwords!!!
    $password = md5($_POST['password']);

    // Validate

    $sql = "INSERT INTO users(nombre, apellido, email, password) VALUES (:nombre, :apellido, :email, :password)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'nombre' => $nombre,
        'apellido' => $apellido,
        'email' => $email,
        'password' => $password
    ]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-flex.min.css">
    <script src="https://use.fontawesome.com/5765211a64.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

  </head>
  <body>
    <!-- Header -->
    <header id="header-container">
      <div class="container">
        <div class="row flex-items-xs-middle flex-items-xs-between">
          <div class="col-xs-6">
            <img class="hidden-md-up" src="images/log.png" alt="First slide" height="100">
            <h1 class="pull-xs-left hidden-xs-down">VosLoEncontras</h1>
          </div>
          <div class="col-xs-3">
            <button class="navbar-toggler pull-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
            </button>
            
          </div>
          <span class="hidden-md-down text-uppercase font-weight-bold pull-sm-right">Llámanos: 3135328897</span>
        </div>
      </div>
    </header>

    <!-- /Header -->

    <!-- Menu -->

    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
        <div class="container">
          <div class="row">
            
            <div class="container">
            <div class="row">
            <div class="col-xs-12">
              <div class="nav-container text-xs-center text-md-left">
                <ul class="nav navbar-nav">
                  <li class="nav-item text-xs-center active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" href="#">Empleo</a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" href="#">Obsequios</a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" href="#">Ofertas</a>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </nav>
</div>

    <!-- /Menu -->

    
    
    <!-- section -->

<section id="login" class="grigio">
  <div class="container1">
    <div id="section" class="presentazione" align="center">
      <!-- <h2 id="section"><center>Selecciona la categoría de tu interés</center></h2>
      <p><center>Somos una empresa Ocañera que busca proyectar sus anunciantes en la región y el mundo.</center></p> -->
        <!-- Menu Pestaña -->

        <!-- Menu Municipios-->

    <div id="menu-container">
      <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse hidden-xs-up">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="nav-container text-xs-center text-md-left">
                <ul class="nav navbar-nav">
                  <li class="nav-item text-xs-center active">
                    <a class="nav-link active" data-toggle="tab" href="#ocaña" role="tab" aria-controls="ocaña">Ocaña<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" data-toggle="tab" href="#abrego" role="tab" aria-controls="abrego">Abrego</a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" data-toggle="tab" href="#laplaya" role="tab" aria-controls="laplaya">La Playa de Belén</a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" data-toggle="tab" href="#convencion" role="tab" aria-controls="convencion">Convención</a>
                  </li>
                  <li class="nav-item text-xs-center">
                    <a class="nav-link" data-toggle="tab" href="#riodeoro" role="tab" aria-controls="riodeoro">Río de Oro</a>
                  </li>
                  <li class="nav-item hidden-sm-up text-xs-center">
                    <a class="nav-link" href="#">Regístrate</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    
              <div class="container">
                <form action="registrar.html" method="post">
                  <div class="col-xs-12 col-sm-8">
                    <div class="list-group list-group-item">
                      <h3 class="panel panel-primary"><center><strong>Registro</strong></center><br></h3>
                      <hr>
                      <p>Completa tus datos. Si ya tienes una cuenta con nosotros, inicia sesión con tu correo electrónico y contraseña registrada</p>
                        <div class="cont-input">
                          <label for="nombre">Nombre</label>
                          <input name="nombre" type="text" placeholder="Nombre" id="nombre" class="inp-txt-1">
                        </div>
                        <div class="cont-input">
                          <label for="apellido">Apellido</label>
                          <input name="apellido" type="text" placeholder="Apellidos" id="apellido" class="inp-txt-1">
                        </div>
                        <div class="cont-input">
                          <label for="email">Email</label>
                          <input name="email" type="text" placeholder="Email" id="email" class="inp-txt-1">
                        </div>
                        <div class="cont-input password">
                          <label for="password">Contraseña</label>
                          <input name="password" type="password" placeholder="Contraseña" id="password" class="inp-txt-1">
                        </div>
                          <input type="submit" value="Guardar" >
                    </div>
                  </div>
                </form>
              </div>
              </div>
            <!-- </div>
          </div>
        </div>
      </div> -->

      <!-- /Menu Pestaña -->

      <!-- </div>
    </div>
  </div>
</div> -->
</section>

    <!-- /section -->

    <!-- Footer -->

    <div id="footer-container">
      <div class="container">
        <div class="row text-xs-center text-sm-left">
          <div class="col-md-4">
            <form id="suscribeForm" action="#" method="POST">
              <h4 class="text-uppercase">¿Quiéres recibir todas las novedades?</h4>
              <div class="form-group">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="tu@correo.com" name="email">
                <small id="emailHelp" class="form-text text-muted">No compartiremos tu información con nadie más</small>
              </div>
              <button type="submit" class="btn btn-primary form-text">Suscribirme</button>
            </form>
          </div>
          <div class="col-md-3 offset-md-5">
            <h4 class="navigation">Navegación</h4>
            <ul class="nav">
              <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Categorías</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Empleo</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Obsequios</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- /Footer -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src='/assets/js/plugins.js'></script>
<script type='text/javascript' src='/assets/js/main.js'></script>
<script type='text/javascript' src='/wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript' src='/js/tab.js'></script>
</body>
</html>