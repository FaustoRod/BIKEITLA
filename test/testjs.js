

var x = 1;
$("#btn-add-input").click(function(){
    if(x < 5){
      x++;
      var inputName = "file" + x.toString();
      $("#file" + x.toString()).css("visibility","visible");
    }
});
