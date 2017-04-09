function getProd(){

    var id = event.target.id;
    window.location = "producto.php?id=" + id;

}



var x = 1;
$("#btn-add-input").click(function(){
    if(x < 5){
      x++;
      var inputName = "file" + x.toString();
      $("#file" + x.toString()).css("visibility","visible");
    }
});

$("#btn-delete").click(function(){
  $.post('deletePic.php',
  {
    id:$("#input-delete-post").val(),
    name:$("#input-delete-picname").val()
  },
  function(data,status){
    alert("DATA: " + data +"\nStatus: " + status);
  });
});
