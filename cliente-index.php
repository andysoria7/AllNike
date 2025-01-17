<?php
session_start();

if(!isset($_SESSION['email'])){
  header('location:visitante-index.php?error=no_einicio_sesion');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="estilos.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600&display=swap" rel="stylesheet">

  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <title>Inicio</title>

</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a href="#"><img src="img/nikepng.png" class="logo-nike" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="cliente-iniciar-sesion.php" id="iniciosesioncliente">Iniciar Sesion</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="cliente-tienda.php" id="tienda">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="cliente-contacto.php" id="contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="cliente-sobre-nosotros.php" id="sobrenosotros">Sobre Nosotros</a>
          </li>
          
        </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

        <ul class="navbar-nav mr-auto">
            <div class="container">
                <a href="cliente-carrito.html"><img src="img/carrito.png" class="logo-carrito" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="icon ion-md-menu"></i>
                </button>
          </ul>

          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo $_SESSION['apellido'].', '.$_SESSION['nombre'];
                if($_SESSION['usu_tipo']==1){
                  echo ' (Admin)';
                }else{
                  echo ' (Cliente)';
                }
              ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="cliente-mis-compras.html">Mis Compras</a>
                  <a class="dropdown-item" href="cliente-cambiar-contraseña.html">Cambiar Contraseña</a>
                <a class="dropdown-item" href="logout.php">Salir</a>
              </div>
            </li>
          </ul>

       
      </div>
  </nav>

  <nav>
      <a href="cliente-index.php">Inicio ></a>
    </nav>

  <section id="hero">
    <div class="container">
      <div class="content-center">
        <h1>
        Bienvenido/a a Allnike
        </h1>
        <p>
        Encontra los mejores productos para vos!!
        </p>

    
      </div>

    </div>

    <footer>
      <address>Todos los derechos reservados a allnike</address>
  </footer>

  </section>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>