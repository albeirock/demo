

<?php

require 'database.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>



<div class="container-fluid">
    <img src="images/banner.jpg" widt >
</div>


<div class="box_sesion">

<div class="container">
  <form action="registro.php"  onsubmit="return ocultar()"  method="POST" >
  <div class="row">
    <div class="col-25">
      <label for="fname">NOMBRES Y APELLIDOS</label>
    </div>
    <div class="col-75">
      <input type="text" style="text-transform:uppercase;" id="nombre" name="nombre" autocomplete="off" >
    </div>
  </div>
  
 
  
  <div class="row">
    <div class="col-25">
      <label for="lname">DOCUMENTO DE IDENTIDAD</label>
    </div>
    <div class="col-75">
      <input type="text" style="text-transform:uppercase;" id="tarjeta" name="tarjeta" autocomplete="off" >
    </div>
  </div>
  

  <div class="row">
    <input type="submit" value="Iniciar Sesión">
  </div>
  </form>
</div>
</div>

<div class="containerbanner">
    <img src="images/banner.jpg" widt >
</div>

</body>
</html>