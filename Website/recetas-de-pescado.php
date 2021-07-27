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
    <img src="../Website/images/BANER-PESCADO.png" class="img-fluid" alt="...">
  </section>
<section class="container ">
    <h1 class="text-center">PESCADO FRITO</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/pescado-con-ensalada-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pescado con Ensalada</h5>
      <p class="card-text">En épocas de calor las ensaladas son la salvación misma; por la frescura de sus ingredientes y la posibilidad de elegirlos en base a los gustos de cada uno.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pargo-frito-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pargo Frito</h5>
      <p class="card-text">El pargo frito es un plato suculento y lleno de mucho sabor y frescura. Su preparación es sumamente sencilla y no te ocupará de mucho tiempo.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/mojarra-frita-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mojarra Frita</h5>
      <p class="card-text">Es una receta económica, muy sabrosa y simple en su preparación. Lo más importante para obtener un buen plato con este tipo de producto, 
          es que el pescado esté lo más fresco posible.</p>
      <a href="#" class="btn btn-primary mt-4">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/estilo-dominicano-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Estilo Dominicano</h5>
      <p class="card-text">Sabor a playa, buena comida. Excelente para comer un domingo en familia y amigos con Ensalada verde o tostones, ideal para la epoca de verano.</p>
      <a href="../Website/receta_pescado_estilo_dominicano.php" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
</div>
</section>
<hr>
<section class="container ">
    <h1 class="text-center">VARIADOS</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/pescado-al-pimiento-01.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pescado al Pimiento</h5>
      <p class="card-text">El pimiento rojo añade un cremoso y delicioso sabor al pescado en esta receta. Sírvelo con arroz o papas como parte de una cena entre semana.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pescado-sudado-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pescado Sudado</h5>
      <p class="card-text">El sudado de pescado es una receta típica de Perú, donde el pescado es un ingrediente muy importante de su gastronomía. Si quieres cocinar de forma 
          diferente, esta receta llena de sabores exóticos es ideal para ti.</p>
      <a href="#" class="btn btn-primary">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/leche-de-tigre-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Leche de Tigre</h5>
      <p class="card-text">La leche de tigre es una refrescante bebida, aperitivo o tentempié cuyo origen está directamente relacionado 
          con el ceviche peruano. En un principio era simplemente el jugo sobrante del ceviche.</p>
      <a href="../Website/receta_leche_tigre.php" class="btn btn-primary ">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/ceviche-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ceviche</h5>
      <p class="card-text">El ceviche es un plato típico de la gastronomía peruana y ha tenido tanto éxito que sus sabores se han extendido a otros países latinoamericanos.</p>
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