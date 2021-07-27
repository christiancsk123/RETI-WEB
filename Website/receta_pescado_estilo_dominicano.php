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
   <link rel="stylesheet" type="text/css" href="../Website/css/style-receta-de-cerdo.css"><link >
   <script src="https://kit.fontawesome.com/759f0e653c.js" crossorigin="anonymous"></script>
    <title>Pescado Dominicano</title>
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
    <img src="../Website/images/banner-receta-pescado.jpg" class="img-fluid cerdo" alt="..." >
    <h1 class=" titulos">PESCADO ESTILO DOMINICANO</h1>
</section>
<hr class=" bg-white">
<section class="container">
    <h2 class="text-start mt-2">INGREDIENTES</h2>
    <div class="secion-3">
        <div class="row">
        <article class="col-md-6 align-self-center" >
          <!-- align-self-center para centrado vertical-->
          
          <h3>Las unidades de medida, pueden variar según al país.</h3>
          <ul>
              <li>3 de 600 o 800 gramos cada uno pescado fresco.</li>
              <li>Agrio de naranja.</li>
              <li>Jugo de limón verde.</li>
              <li>Sal al gusto.</li>
              <li>Pimienta al gusto.</li>
              <li>Orégano al gusto.</li>
              <li>3 cucharaditas sazonador de pescado, de preferencia marca BADIA, pero si no tienen a mano sazonador para carne también funcionaría.</li>
              <li>100 gramos harina.</li>
              <li>Aceite suficiente para freír.</li>
          </ul>
        </article>
        <figure class="col-md-6">
          <img src="../Website/images/pescado-01.png" alt="Nuestro equipo" class="img-fluid">
        </figure>  
        </div><!-- row -->
      </div>
</section>
<section class="container">
<h3 class="text-start mt-2">Preparación</h3>
<p class="parrafos">Corta: Haz 3 o 4 cortes diagonales a ambos lados de cada pescado.Sazona: Unta cada pescado con una pizca de pimienta, tomillo, 
    ajo y una pizca de sal. Unta bien la sal y pimienta asegurándote que entre en los cortes. Unta cada pescado con fécula de maíz.Fríe: En un caldero 
    profundo calienta el aceite a fuego medio-alto (176 ºC [350 ºF]). Fríe el pescado uno a uno hasta que adquieran un color dorado en ambos lados.Sirve: 
    Adorna con gajos de limón y sirve con tostones y sal al lado.</p>
</section>
        <section id="video" >
        <div class="container">
           <div class="row">
            <div class="col-md-6">
              <table class="table table-bordered table-info">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nutrientes</th>
                    <th scope="col">Vitaminas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Calorias 572kcal</td>
                    <td>Vitamina A: 216IU</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Grasa: 43g</td>
                    <td>Potasio: 606mg</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/hxY3SvYo6V8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              
          </div><!--row-->
        </div><!--container-->
      </section><!--Eventos-->


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