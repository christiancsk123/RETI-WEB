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
              <h1 class="text-light font-weight-bold mb-4">Se parte de la familia RETI</h1>
              <form class="row g-3" action="php/registro.php" method="POST">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="inputEmail4" name="correo">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="inputPassword4" name="pass">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Nombre Completo" name="nombre">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apellidos" name="apellido">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="inputCity" name="ciudad">
                </div>
                <div class="col-md-2">
                  <label for="inputState" class="form-label">Pais</label>
                  <select id="inputState" class="form-select" name="pais">
                    <option selected>Escoger...</option>
                    <option>Perú</option>
                    <option>Chile</option>
                    <option>Venezuela</option>
                    <option>Brasil</option>
                  </select>
                </div>
                <div class="col-md-4" >
                <label for="inputYear" class="form-label">Fecha de Nacimiento</label>
                  	<input type="date" class="form-control" id="inputDate" name="nacimiento">
                </div>
    
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Acepta los terminos y condiciones de RETI
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
              </form>
            </div>
            <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-5 mb-5">
              <p class="d-inline-block mb-0">¡Inicia Sesión con nosotros!</p><a href="../Website/login.php" class="text-light fw-bold text-decoration-none"> Iniciar Sesión</a>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
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