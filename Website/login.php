<?php

    session_start();
    if(isset($_SESSION['usuario'])){
      header("location: index.php");
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../Website/css/styleLogin.css">
    <script src="https://kit.fontawesome.com/759f0e653c.js" crossorigin="anonymous"></script>
    
    <title>Login</title>
  </head>
  <body class="bg-dark">
      <section>
        <div class="row g-0">
          <div class="col-lg-7">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/fondo.jpg" class="d-block w-100 min-vh-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold">Recetas siempre a tu alcance.</h2>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/fondo2.jpg" class="d-block w-100 min-vh-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold">Tips de chefs renombrados.</h2>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/fondo3.jpeg" class="d-block w-100 min-vh-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold">Tutoriales interactivos.</h2>
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
          </div>
          <div class="col-lg-5 d-flex flex-column aling-items-end min-vh-100">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-5 ">
              <img src="../Website/images/logo0.png" class="img-thumbnall" alt="" width="150" height="80">
            </div>
            <div class="px-lg-5 py-lg-4 p-4 w-100 aling-self-center">
              <h1 class="text-light font-weight-bold mb-4">Bienvenido a RETI</h1>
              <form class="mb-5" action="php/login_usuario.php" method="POST">
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Correo</label>
                  <input type="email" class="form-control border-0" placeholder="Ingresa tu email" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
                  
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
                  <input type="password" class="form-control border-0 mb-2" placeholder="Ingresa tu Contraseña" id="exampleInputPassword1" name="password">
                  <a id="emailHelp" class="form-text text-muted text-decoration-none" href="#">¿Has olvidado tu contraseña?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
              </form>

              <p class="fw-bold text-center text-muted">O inicia Sesión con</p>
              <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-outline-light flex-grow-1 mx-2"><i class="fab fa-google lead mx-2"></i> Google</button>
                <button type="submit" class="btn btn-outline-light flex-grow-1 mx-2"><i class="fab fa-facebook-f lead mx-2"></i> Facebook</button>
              </div>
            </div>
            <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-5 mb-5">
              <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta RETI?</p><a href="registrarse.php" class="text-light fw-bold text-decoration-none "> Crea una Cuenta Ahora</a>
            </div>
          </div>
          
        </div>
      </section>
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>