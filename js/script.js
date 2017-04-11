var tiempo;
function tiempo() {
    tiempo = setTimeout(mostrarPagina, 4000);
}

function mostrarPagina() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("contGeneral").style.display = "flex-wrap:wrap";
}
