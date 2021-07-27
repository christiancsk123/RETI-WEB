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

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Recetas y Tips</title>

    <!-- LINK A BOSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <!-- prueba -->

    <!-- LINKS A GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Roboto+Mono:wght@100&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap"
      rel="stylesheet"
    />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://glitch.com/favicon.ico" />
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="styleSearch.css">
    <script src="https://kit.fontawesome.com/759f0e653c.js" crossorigin="anonymous"></script>
    <script src="/script.js" defer></script>
  </head>

  <body>
    
    
    <!-- NAV BAR -->
    <header>
      <!-- Barra superior de inicio -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RETI</a>
          <a href="index.html">
            <img
              src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2FLogoCocina.png?v=1619740521230"
              alt=""
              width="55"
              height="60"
            />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="index.html"
                  tabindex="1"
                  >INICIO</a
                >
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="true"
                >
                  RECETAS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="plantilla-recetas.html">POLLO</a></li>
                  <li><a class="dropdown-item" href="plantilla-recetas-carne.html">CARNE</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="plantilla-recetas-pescado.html">PESCADO</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown1"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="true"
                >
                  TIPS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <li><a class="dropdown-item" href="/tips.html">COCINA</a></li>
                            <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="/tipscovid.html">COVID-19</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="login.html"
                  tabindex="1"
                  aria-disabled="false"
                  >LOG IN</a
                >
              </li>
            </ul>
             <!--icono de busqueda -->
            <form class="d-flex" id="ctn-icon-search">
              <i class="fas fa-search" id="icon-search"></i>
            </form>
          </div>
        </div>
      </nav>
      <!--busqueda añadidos -->
      <div id="ctn-bars-search">
      <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
    <ul id="box-search" >
      <li><a href="login.html"><i class="fas fa-search"></i>Papas</a></li>
      <li><a href="#"><i class="fas fa-search"></i>Ensaladas</a></li>
      <li><a href="#"><i class="fas fa-search"></i>Pescado</a></li>
      <li><a href="plantilla-recetas.html"><i class="fas fa-search"></i>Pollo</a></li>
  </ul>
  <div id="cover-ctn-search">
    
        
          </div>
<!-- NAV BAR FINAL-->
      
      
      
      <!-- Fondo Wikirecetadpedia-->
      <div
        class="inicio d-flex justify-content-center align-items-center flex-column"
      >
        <img
          src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2FLogoCocina.png?v=1619740521230"
          alt=""
          width="55"
          height="60"
        />
        <h1>
          WIKI RECETAPEDIA
        </h1>
        <h5>
          Entra a lo que buscar y tal vez termines con algo mejor
        </h5>
        <button class="btn btn-dark">
          <a href="registrarse.html">
            REGISTRATÉ YA!
          </a>
        </button>
      </div>
    </header>
    
    <section>
      <!-- He agregado cartas adaptativas al tamaño de la pantalla, además 
            de centrarlas y alargar los cuadros de texto, 
            añadidas sombras -->
      <!-- 1 carta-->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="container mt-5 mb-0">
              <div class="card text-white bg-dark mb-3">
                <img
                  src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Frsz_1rsz_anna-pelzer-igfigp5onv0-unsplash_1.jpg?v=1619863369125"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">TIP 1</h5>
                  <p class="card-text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                  </p>
                  <a href="#" class="btn btn-primary"
                    >boton si tal vez funciona</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- 2 carta-->
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="container mt-5 mb-0">
              <div class="card text-white bg-dark mb-3">
                <img
                  src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Frsz_1rsz_anna-pelzer-igfigp5onv0-unsplash_1.jpg?v=1619863369125"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">TIP 2</h5>
                  <p class="card-text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                  </p>
                  <a href="#" class="btn btn-primary"
                    >boton si tal vez funciona</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- 3 carta-->
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="container mt-5 mb-0">
              <div class="card text-white bg-dark mb-3">
                <img
                  src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Frsz_1rsz_anna-pelzer-igfigp5onv0-unsplash_1.jpg?v=1619863369125"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">TIP 3</h5>
                  <p class="card-text">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                  </p>
                  <a href="#" class="btn btn-primary"
                    >boton si tal vez funciona</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-5">
            <img
              src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2FOpen%20Doodles%20-%20Coffee%20(1).png?v=1620940487012"
            />
          </div>
          <div class="col-12 col-sm-6">
            <h3>
              ¡Los mejores tips de todo internet!
            </h3>
            <p></p>

            <p></p>
            <h4>
              Tu mejor amigo en la cocina, encuentra todas las recetas que
              necesites para impresionar a tu familia o amigos
            </h4>
          </div>
        </div>
        <form action="sandroparra123@gmail.com">
          <label for="email">Ingresa tu correo!</label>
          <div class="d-flex">
            <div class="flex-fill mr-8">
              <input type="email" id="email" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </section>
    <section>
      <div class="product-stripe">
        <div class="stripe-container">
           <div class="container mt-5 mb-5">
            <div>
              <div>
                <div class="card">
                  <img src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Freceta-facil-de-carne-de-cerdo-picante-bueno%20(1).jpg?v=1622417974028" class="card-img-top" >
                  <div
                    title="comida presencial 1"
                    class="cover cover-small"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      Carne de cerdo picante
                    </h5>
                    <p class="card-text">
                      Lore Ipsum generico
                    </p>
                    <a href="index.html" class="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <div class="container mt-5 mb-5">
            <div>
              <div>
                <div class="card">
                  <img
                    src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Fpescado-frito-al-estilo-dominicano-foto-principal%20(1).jpg?v=1622418334227"
                    class="card-img-top"
                  />
                  <div
                    title="comida presencial 1"
                    class="cover cover-small"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      Al estilo dominicano
                    </h5>
                    <p class="card-text">
                      Lore Ipsum generico
                    </p>
                    <a href="index.html" class="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="container mt-5 mb-5">
            <div>
              <div>
                <div class="card">
                  <img src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Fe14bf0095286b0c484f464e3c989b0ce%20(1).jpg?v=1622417973624" class="card-img-top" >
                  <div
                    title="comida presencial 1"
                    class="cover cover-small"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      Carne en salsa de queso
                    </h5>
                    <p class="card-text">
                      Lore Ipsum generico
                    </p>
                    <a href="index.html" class="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container mt-5 mb-5">
            <div>
              <div>
                <div class="card">
                  <img src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Fleche-de-tigre_700x467%20(1).jpg?v=1622419704253" class="card-img-top" >
                  <div
                    title="comida presencial 1"
                    class="cover cover-small"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      Leche de tigre
                    </h5>
                    <p class="card-text">
                      Lore Ipsum generico
                    </p>
                    <a href="index.html" class="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container mt-5 mb-5">
            <div>
              <div>
                <div class="card">
                  <img
                    src="https://cdn.glitch.com/a2724dda-1c3c-4ae0-9117-30bf0d780c89%2Fdescargar.jpg?v=1622416031353"
                    class="card-img-top"
                  />
                  <div
                    title="comida presencial 1"
                    class="cover cover-small"
                  ></div>
                  <div class="card-body">
                    <h5 class="card-title">
                      Con verduras
                    </h5>
                    <p class="card-text">
                      Lore Ipsum generico
                    </p>
                    <a href="index.html" class="btn btn-primary">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
  </body>
  
  <!--Copiar desde aca para el navbar-->
  <script>
    document.getElementById("icon-search").addEventListener("click",mostrar_buscador);
    document.getElementById("cover-ctn-search").addEventListener("click",ocultar_buscador);
    document.getElementById("inputSearch").addEventListener("keyup",buscador_interno);
//buscador de contenido
    bars_search = document.getElementById("ctn-bars-search");
    cover_ctn_search = document.getElementById("cover-ctn-search");
    inputSearch = document.getElementById("inputSearch");
    box_search = document.getElementById("box-search");

//funcion para mostrar el buscador

    function mostrar_buscador(){
    bars_search.style.top="80px";
    cover_ctn_search.style.display = "block";
    box_search.style.display = "block";
    inputSearch.focus();
    
    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }
    }

//funcion para ocultar el buscador
    function ocultar_buscador(){
    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none";
    }

// creando filtrado de busqueda
    function buscador_interno(){
      filter = inputSearch.value.toUpperCase();
      li = box_search.getElementsByTagName("li");

// recorriendo elementos a filtrar mendiante los li
    for (i = 0; i < li.length; i++){
      
      a = li[i].getElementsByTagName("a")[0];
      textValue = a.textContent || a.innerText;

      if(textValue.toUpperCase().indexOf(filter) > -1){
        li[i].style.display = "";
        box_search.style.display = "block";
        if (inputSearch.value === ""){
                box_search.style.display = "none";
            }
      }else{
        li[i].style.display = "none";
      }

    }
    }
    </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"
  ></script>
  
</html>
 <!--final del navbar-->