<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
      echo '<script>
            alert("inicia session");
            window.location = "login.php";
        </script>';
        header("location: login.php");
        session_destroy();
        die();
    }
    include '../Website/php/conexion.php';
    $alv = $_SESSION['usuario'];
    $mostrarUsuario = "SELECT idUsuariosDM, nombre FROM usuariosdm WHERE idUsuariosDM='$alv'";

    $muestra = $conexion->query($mostrarUsuario);
      $row = $muestra->fetch_assoc();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Website/css/styleSearch.css"><link >
    <link rel="stylesheet" type="text/css" href="../Website/css/styleIndex.css"><link >
    <script src="https://kit.fontawesome.com/759f0e653c.js" crossorigin="anonymous"></script>
    <title>Recetas de Pollo</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Website/index.php"><img src="../Website/images/logo0.png" alt="" width="85" height="38"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Website/index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Website/nosotros.php">NOSOTROS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIAS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../Website/recetas-de-pollo.php">POLLO</a></li>
            <li><a class="dropdown-item" href="../Website/recetas-de-carne.php">CARNE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../Website/recetas-de-pescado.php">PESCADO</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TIPS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../Website/tips-cocina.php">COCINA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../Website/tips-covid.php">COVID-19</a></li>
          </ul>
        </li>
        
      </ul>
       <li class="d-flex " id="ctn-icon-search">
        <i class="fas fa-search " id="icon-search" ></i>
      </li>
      
      <div class="dropdown mx-0">
      
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> 
    <?php echo('Bienvenid@');?></button>
  <ul class="dropdown-menu drop" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Perfil</a></li>
    <li><a class="dropdown-item" href="#">Configuración</a></li>
    <li><a class="dropdown-item" href="php/cerrar_session.php">Cerrar Sesion</a></li>
  </ul>
</div>
    
    </div>
    
  </div>  
  
</nav>
    </header>
    
<div id="ctn-bars-search">
      <input  type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
<ul id="box-search" >
      <li><a href="../Website/recetas-de-carne.php"><i class="fas fa-search"></i>Carne</a></li>
      <li><a href="../Website/tips-cocina.php"><i class="fas fa-search"></i>Tips de Cocina</a></li>
      <li><a href="../Website/tips-covid.php"><i class="fas fa-search"></i>Tips de Covid</a></li>
      <li><a href="../Website/receta_pescado_estilo_dominicano.php"><i class="fas fa-search"></i>Pescado Estilo Dominicano</a></li>
      <li><a href="../Website/receta_carne_de_cerdo_picante.php"><i class="fas fa-search"></i>Carne de Cerdo Picante</a></li>
      <li><a href="../Website/receta_carne_salsa_queso.php"><i class="fas fa-search"></i>Carne en Salsa de Queso</a></li>
      <li><a href="../Website/receta_leche_tigre.php"><i class="fas fa-search"></i>Leche de Tigre</a></li>
      <li><a href="../Website/recetas_pollo_verduras.php"><i class="fas fa-search"></i>Pollo con Verduras</a></li>
      <li><a href="../Website/receta_pachamanca.php"><i class="fas fa-search"></i>Pachamanca</a></li>
      <li><a href="../Website/recetas-de-pescado.php"><i class="fas fa-search"></i>Pescado</a></li>
      <li><a href="../Website/recetas-de-pollo.php"><i class="fas fa-search"></i>Pollo</a></li>
  </ul>
  <div id="cover-ctn-search"></div>
  <hr class=" mb-2 mt-5">
  <section class="mb-3">
    <img src="../Website/images/BANER-POLLO.png" class="img-fluid" alt="...">
  </section>
<section class="container ">
    <h1 class="text-center">AL HORNO</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/pollo-con-cerveza-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo al Horno con Cerveza</h5>
      <p class="card-text">Esta receta de pollo al horno con cerveza, es muy buena porque el resultado es delicioso 
          y más teniendo en cuenta lo fácil que es su preparación. La carne queda muy jugosa y la salsita resultante está espectacular.</p>
      <a href="#" class="btn btn-primary">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pollo-a-lo-peruano-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo a lo Peruano</h5>
      <p class="card-text">La preparación que te traemos esta vez en RecetasGratis es una receta de pollo al horno peruano sencilla pero muy sabrosa. 
          El pollo al horno es un plato muy popular, así que en cada país tiene sus versiones.</p>
      <a href="#" class="btn btn-primary">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pollo-verduras-01.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo con Verduras</h5>
      <p class="card-text">Si no tienes mucho tiempo para cocinar, la mejor opción es el pollo con verduras, un platillo exquisito y muy saludable. 
          Se trata de una preparación sencilla</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/pollo-entero-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo Entero</h5>
      <p class="card-text">Un pollo entero rostizado al horno, jugoso, fácil y rápido de preparar con ingredientes básicos. Esta receta te tomará solo diez minutos de tu tiempo... ¡y al horno va!</p>
      <a href="#" class="btn btn-primary mt-4">Saber más...</a>
    </div>
  </div>
</div>
</section>
<hr>
<section class="container ">
    <h1 class="text-center">POLLO FRITO</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/pollo-con-salsa-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo Frito con Salsa</h5>
      <p class="card-text">La carne de pollo es la que más se utiliza en prácticamente todas las cocinas del mundo, ya que suele ser la más económica y además contiene gran 
          cantidad de proteínas y nutrientes.</p>
      <a href="#" class="btn btn-primary mt-4">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pollo-clasico-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo Clasico</h5>
      <p class="card-text">Con el pollo frito no hay unanimidad, lo mismo puede ser el rey en los puestos de comida callejera de las barcazas tailandesas o bien el plato primordial de los días de celebración en una 
          comunidad centro africana.</p>
      <a href="#" class="btn btn-primary">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/palitos-de-pollo-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Palitos de Pollo</h5>
      <p class="card-text">Los 'fingers' son unos palitos de pollo sin piel ni huesos rebozados y fritos que suelen servirse con alguna salsa. Se diferencian de 
          los 'nuggets' en que estos suelen hacerse con pollo picado. </p>
      <a href="#" class="btn btn-primary mt-4">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/pollo-con-limon-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pollo con Limon</h5>
      <p class="card-text">Inspirada por alguno de mis compañeros cocinillas, hoy empiezo una serie de posts monográficos bajo el título “Asia, ¡qué buena estás!”</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
</div>
</section>

  <footer>
  <div class="container_footer">
    <div class="box_footer">
      <div class="logo">
        <img src="../Website/images/logo0.png" alt="" >
      </div>
      <div class="terminos">
        <p>Web dedicada a compartir contenido gastronómico didactico, en busqueda de poder ayudar a la población joven que no sabe cocinar
          y se han visto obligados a aprender en sus hogares, debido a la coyuntura del COVID-19.</p>
      </div>
    </div>
    <div class="box_footer">
      <h2>Tutoriales</h2>
      <a href="#">Platos Gourmet</a>
      <a href="#">Platos Exóticos</a>
      <a href="#">Prevencion COVID-19</a>
      <a href="#">Herramientas de Cocina</a>
    </div>
    <div class="box_footer">
      <h2>Compañia</h2>
      <a href="#">¿Quienes somos?</a>
      <a href="#">Equipo de trabajo</a>
      <a href="#">Servicios</a>
      <a href="#">Socios</a>
    </div>
    <div class="box_footer">
      <h2>Redes Sociales</h2>
      <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
  </div>
  <div class="box_copy">
    <hr>
    <p>Todos los derechos reservados © 2021 <b>RETI</b></p>
  </div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../Website/JS/buscador.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>