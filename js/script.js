var tiempo;
function tiempo() {
    tiempo = setTimeout(mostrarPagina, 4000);
}

function mostrarPagina() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("contGeneral").style.display = "flex-wrap:wrap";
}

function logout(){
  var c = confirm("Seguro que desea finalizar sesion?");
  if(c){
    $.post("php/logout.php");
    window.location = "index.php";
  }
}

function getProd(btn){

    var id = btn;
    window.location = "views/verProducto.php?id=" + id;

}

/*$("#btn-logout").click(function(){
  var c = confirm("Seguro que desea finalizar sesion?");
  if(c){
    $.post("php/logout.php");
  }
});*/
