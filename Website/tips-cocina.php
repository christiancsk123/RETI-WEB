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
    <title>Tips de Cocina</title>
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
    <img src="../Website/images/BANER-TIPS.png" class="img-fluid" alt="...">
  </section>
<section class="container ">
    <div class="row">
    <div class="col-md-6">
<div class="card mb-3">
  <img src="../Website/images/agua-01.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">EVITAR QUE SE DESBORDE EL AGUA</h5>
    <p class="card-text">¿Sabías que si colocar una cuchara de madera sobre la olla evitas que el agua se desborde? 
      La cuchara absorbe algo de humedad, y además al hacer contacto con ella las burbujas se revientan, ayudando así
      a que no se serborde el agua, y te evitas problemas.</p>
    <p class="card-text"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
</div>
    </div>    
    <div class="col-md-6">
        <div class="card mb-3">
  <img src="../Website/images/pimientos-01.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CORTAR PIMIENTOS</h5>
    <p class="card-text texto-01">Primero corta la parte inferior de modo que el pimiento pueda mantenerse "de pie" por sí mismo. 
      Luego corta los laterales, formando un cuadrado con la parte del centro. Deberás tener por un lado la base, y por 
      el otro, cuatro partes de pimiento, una de cada lado.</p>
    <p class="card-text"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
</div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
<div class="card mb-3">
  <img src="../Website/images/vinos-01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ENFRIAR EL VINO</h5>
    <p class="card-text">La mejor manera de mantener tu vino frío sin necesidad de diluirlo, es colocando en la misma copa algunas 
      uvas congeladas. Verás que estará bien frío y sobre todo, conservará su delicioso sabor.</p>
    <p class="card-text"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
</div>
    </div>    
    <div class="col-md-6">
        <div class="card mb-3">
  <img src="../Website/images/limones-01.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">OBTÉN MAS JUGO</h5>
    <p class="card-text">La forma ideal de obtener todo el jugo de tus cítricos es muy simple. Solo debes apretar un poco la cáscara y 
      rodar la fruta sobre una superficie. Notarás que cuando exprimas el cítrico, no desperdiciarás ni una gota de su jugo..</p>
    <p class="card-text"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
</div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
<div class="card mb-3">
  <img src="../Website/images/quion-01.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PELAR GENGIBRE</h5>
    <p class="card-text">Deja el cuchillo en el cajón y usa una cuchara para pelar el jengibre. Este método es el más efectivo, 
      ya que retira toda la cáscara sin dificultad, incluso la que se encuentra en las pequeñas grietas.</p>
    <p class="card-text mb-3 mt-4"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
</div>
    </div>    
    <div class="col-md-6">
        <div class="card mb-3">
  <img src="../Website/images/hierba-02.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CONSERVA LAS HIERBAS</h5>
    <p class="card-text">¿Cansada de tener que tirar las hierbas porque se echan a perder muy rápido? ¡Se terminó! Utiliza la cantidad 
      que necesites y el resto córtalo y guárdalo en una cubetera con aceite de oliva. Así tus hierbas congeladas en aceite se mantendrán 
      perfectas para que puedas volverlas a usar.</p>
    <p class="card-text"><small class="text-muted">Actualizado hace 3 min...</small></p>
  </div>
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