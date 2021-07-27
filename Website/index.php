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
    <title>Bienvenido a RETI</title>
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
  <section class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Website/images/fondo.jpg" class="d-block w-100 " alt="..." id="carusel_fijo">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡Encuentra las mejores recetas!</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../Website/images/fondo2.jpg" class="d-block w-100" alt="..." id="carusel_fijo">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡Muy faciles tutoriales!</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../Website/images/fondo3.jpeg" class="d-block w-100" alt="..." id="carusel_fijo">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡Tienes acceso a una cuenta personalizada!</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>
    <section id="parte2"><!--section1-->
    <p  title="Eventos"><h2 class="pt-3 text-decoration-none text-center">Recetas Destacadas</h2></p>
<div class="container"><!--container-->
  <div id="cas" class="row">
    <div class="col-sm">
    <h5>Carne de Cerdo Picante</h5>
      <a href="../Website/receta_carne_de_cerdo_picante.php" title=""><img src="../Website/images/carne_cerdo_picante.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
      <div class="d-none d-md-block">
        <p>¡Platillo no apto para cardiacos!</p>
      </div>
    </div>
    <div class="col-sm">
        <h5>Pescado Estilo Dominicano</h5> 
      <a href="../Website/receta_pescado_estilo_dominicano.php"><img src="../Website/images/pescado_dominicano.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
        <div class="d-none d-md-block">
        <p>¡Pescado frito con un estilo diferente!</p>
      </div>
    </div>
    <div class="col-sm">
        <h5>Carne en salsa de Queso</h5>
       <a href="../Website/receta_carne_salsa_queso.php"><img src="../Website/images/carne_salsa_queso.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
        <div class="col-sm">
        <p>¡Para los amantes de queso!</p>
      </div>
    </div>
  </div>
</div><!--container-->
<div class="container"><!--container-->
  <div id="cas" class="row">
    <div class="col-sm">
        <h5>Leche de Tigre</h5>
      <a href="../Website/receta_leche_tigre.php" title=""><img src="../Website/images/leche_tigre.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
     <div class="d-none d-md-block">
        <p>¡Potaje bandera de nuestro país!</p>
      </div>
    </div>
    <div class="col-sm">
        <h5>Pollo con Verduras</h5>
      <a href="../Website/recetas_pollo_verduras.php"><img src="../Website/images/pollo_verduras.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
      <div class="d-none d-md-block">
        <p>¡Un poco de verduras para engañar a la dieta!</p>
      </div>
    </div>
    <div class="col-sm">
          <h5>Pachamanca</h5>
       <a href="../Website/receta_pachamanca.php"><img src="../Website/images/pachamanca.png" class="shadow-lg p-0 mb-2 bg-white rounded"></a>
       <div class="d-none d-md-block">
        <p>¡Platillo ancestral de nuestro país!</p>
      </div>
    </div>
  </div>
</div><!--container-->
</section><!--section1-->
<section>
  <img src="../Website/images/baner-medio-0.png" class="img-fluid" alt="...">
</section>
<section class="" id="parte2">
  <p title="Noticias" ><h2 class="p-1 text-decoration-none text-center">Tips del Momento</h2></p>
  <div class="secion-3">
        <div class="row">
        <article class="col-md-6 align-self-center" >
          <!-- align-self-center para centrado vertical-->
          <h1>Lavar siempre los alimentos, después de comprarlos.</h1>
          <h2>¡El COVID-19, aún está entre nosotros!</h2>
          <p id="noticia">Lave las frutas y verduras en agua limpia que cae del grifo sobre el fregadero limpio. 
            Las frutas y verduras frescas no deben ser sumergidas en agua. No use detergentes, jabones o cloro para lavar los 
            productos frescos. Estos productos pueden cambiarles el sabor y ser tóxicos.</p>
        </article>
        <figure class="col-md-6">
          <img src="../Website/images/lavarse_manos.png" alt="Nuestro equipo" class="img-fluid">
        </figure>  
        </div><!-- row -->
      </div>
        <div class="secion-3">
        <div class="row">
          <figure class="col-md-6">
            <img src="../Website/images/alimentacion.png" alt="Nuestro equipo" class="img-fluid">
          </figure>  
        <article class="col-md-6 align-self-center">
          <!-- align-self-center para centrado vertical-->
          <h1>En tiempos de pandemia, ¡Recuerda mantener una buena alimentacion!</h1>
          <h2>Las verduras y alimentos altos en vitaminas, ¡Serán nuestra mayor arma contra el COIV-19!</h2>
          <p id="noticia">La alimentación saludable es aquella que aporta a cada individuo todos los alimentos necesarios para 
            cubrir sus necesidades nutricionales, en las diferentes etapas de la vida (infancia, adolescencia, edad adulta y envejecimiento), 
            y en situación de salud.</p>
        </article>
        </div><!-- row -->
      </div>
       <div class="secion-3">
        <div class="row">
        <article class="col-md-6 align-self-center">
          <!-- align-self-center para centrado vertical-->
          <h1>¡Evita las reuniones y fiestas!</h1>
          <h2>Las reuniones sociales, son una de las principales causas del contágio.</h2>
          <p id="noticia">Para César Munayco, especialista del Centro Nacional de Epidemiología, Prevención y Control de Enfermedades del Minsa, 
            existe un alto riesgo de contagio de coronavirus si se promueven reuniones familiares o de amigos que no usen mascarillas ni respeten 
            el distanciamiento social.</p>
        </article>
        <figure class="col-md-6">
          <img src="../Website/images/alcohol.png" alt="Nuestro equipo" class="img-fluid" >
        </figure>  
        </div><!-- row -->
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
      <a href="../Website/nosotros.php">¿Quienes somos?</a>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../Website/JS/buscador.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    
  </body>

  
</html>