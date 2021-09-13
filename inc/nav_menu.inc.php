<nav class="navbar navbar-expand-lg">
    <div class="container">
      
      <a href="visitante-index.php"><img src="img/nikeicono.png" class="logo-nike" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
       
          <li class="nav-item">
            <?Php 
            if(!isset($_SESSION['email'])){
              echo '<a class="nav-link" href="iniciar-sesion.php" id="iniciosesioncliente">Iniciar Sesion :)</a>';
            }
            ?>
            
          </li>

          <li class="nav-item">
            <a class="nav-link " href="tienda.php" id="tienda">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contacto.php" id="contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="sobre-nosotros.php" id="sobrenosotros">Sobre Nosotros</a>
          </li>
         
          <ul>
          <div class="reloj">
          <div class="hora">00</div>
          <div class="min">00</div>
          <div class="seg">00</div>
          </div>
          <script src="js/reloj.js"></script>
          </ul>

        </ul>

        

        </div>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <?php 
        if(isset($_SESSION['usu_tipo']) ){
        include('inc/menu_admin_cliente.inc.php');
        }
        ?>
 
      </div>
  </nav>
