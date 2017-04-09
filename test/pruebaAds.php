<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADS</title>
  </head>
  <body>
    <form action="setAds.php" method="post" enctype="multipart/form-data">
      <input type="file" name="ads[]"/>
      <input type="file" name="ads[]"/>
      <input type="file" name="ads[]"/>
      <button type="submit" name="btn-sub">Subir</button>
    </form>
    <div style="display:inline">
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img id="ad1" src="<?php include("database.php");
        $sql = "SELECT 	imagen FROM ads WHERE id = 1";
        $r = $conexion->query($sql);
        if($row = mysqli_fetch_array($r)){
          echo $row['imagen'];
        } ?>"/>


      </div>
      <button id="1" onclick="editAd()">editar</button>
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img id="ad2" src="<?php include("database.php");
        $sql = "SELECT 	imagen FROM ads WHERE id = 2";
        $r = $conexion->query($sql);
        if($row = mysqli_fetch_array($r)){
          echo $row['imagen'];
        } ?>"/>

      </div>
      <button id="2" onclick="editAd()">editar</button>
      <div style="width:300px;height:300px;border:1px solid red;margin:2px;">
        <img id="ad3" src="<?php include("database.php");
        $sql = "SELECT 	imagen FROM ads WHERE id = 3";
        $r = $conexion->query($sql);
        if($row = mysqli_fetch_array($r)){
          echo $row['imagen'];
        } ?>"/>

      </div>
      <button id="3" onclick="editAd()">editar</button>
      <div id="editDiv">


      </div>
    </div>
    <script src="jquery-311.min.js"></script>
    <script>

      function editAd(){
        var id = event.target.id;
        $.post("editPicPage.php",
        {
          id:id
        },function(data){
          $("#editDiv").html(data);
        });

      }

    </script>
  </body>
</html>
