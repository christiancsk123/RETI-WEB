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
    <img src="../Website/images/BANER-CARNE.png" class="img-fluid" alt="...">
  </section>
<section class="container ">
    <h1 class="text-center">CARNE DE RES</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/carne-de-res-en-salsa-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carne de Res en Salsa</h5>
      <p class="card-text">Esta carne queda muy rica para cualquier tiempo de comida ya sea el almuerzo o la cena. Solo se acompaña con arroz, o puré de papa y vegetales.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/fajitas-de-carne.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fajitas de Carne</h5>
      <p class="card-text">Las Fajitas de res son una tradicional comida mexicana caracterizada por su excelente y práctica forma de preparar. Con tan 
          solo algunos ingredientes podemos hacer esta deliciosa receta para disfrutar en familia.</p>
      <a href="#" class="btn btn-primary">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/pecho-de-res-al-horno-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pecho de Res al Horno</h5>
      <p class="card-text">Dale un toque distinto, original y delicioso a la carne de res con esta riquísima receta de pecho de res al horno con salsa para asar.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/carne-de-res-con-verduras-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carne con Verduras</h5>
      <p class="card-text">Es un delicioso platillo preparado con carne de res, previamente marinado y luego salteado con verduras, terminado de cocer en una rica salsa.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
</div>
</section>
<hr>
<section class="container ">
    <h1 class="text-center">CARNE DE CERDO</h1>
    <hr>
    <div class="card-group">
  <div class="card">
    <img src="../Website/images/carne-de-cerdo-en-adobo-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carne de Cerdo en Adobo</h5>
      <p class="card-text">Disfruta de un auténtico sabor casero y aprende a preparar un adobo de cerdo con papas, es realmente fácil y rápido de hacer.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/carne-en-salsa-de-queso-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carne en Salsa de Queso</h5>
      <p class="card-text">Cómo hacer un solomillo con salsa de queso. Cocinar en casa platos que gusten a todos, no tiene porqué ser sinónimo de mucho trabajo ni demasiado gasto.</p>
      <a href="../Website/receta_carne_salsa_queso.php" class="btn btn-primary mt-4">Saber más...</a>
    </div>
  </div>
  <div class="card">
    <img src="../Website/images/carne-de-cerdo-asada-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carne de Cerdo Asada</h5>
      <p class="card-text">Esta receta presenta una manera de asar un lomo de cerdo al horno a temperatura muy baja de manera que se asa bien pero se mantiene jugosa.</p>
      <a href="#" class="btn btn-primary mt-5">Saber más...</a>
    </div>
  </div>
   <div class="card">
    <img src="../Website/images/carne-de-cerdo-picante-01.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Carnde de Cerdo Picante</h5>
      <p class="card-text">Prepara el chilorio mas delicioso que hayas probado con esta sencilla receta desde Sinaloa. La carne queda suave y con un sabor espectacular 
          gracias al adobo especiado con mezcla de tres chiles secos, ¡pruébalo!</p>
      <a href="../Website/receta_carne_de_cerdo_picante.php" class="btn btn-primary ">Saber más...</a>
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