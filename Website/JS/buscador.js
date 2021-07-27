
//ejecutar funciones
    document.getElementById("icon-search").addEventListener("click", mostrarBuscador);
    document.getElementById("cover-ctn-search").addEventListener("click",ocultar_buscador);
    document.getElementById("inputSearch").addEventListener("keyup",buscador_interno);
//buscador de contenido
    bars_search = document.getElementById("ctn-bars-search");
    cover_ctn_search = document.getElementById("cover-ctn-search");
    inputSearch = document.getElementById("inputSearch");
    box_search = document.getElementById("box-search");

//funcion para mostrar el buscador

    function mostrarBuscador(){
    bars_search.style.top="60px";
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