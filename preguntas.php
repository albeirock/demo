<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABER</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
   <h1> LAS PREGUNTAS ESTÁN AQUI</h1>
   
   <form name= "contacto" action="destroy.php"  onsubmit="return ocultar()"  method="POST" >
   <div class="row" id="caja21">
    <input type="submit" value="Salir" >
  </div>
   </form>

 




<?php

session_start();



$host = "localhost";
$user = "albeirock";
$password = "777";
$db = "votacionx";
$enlace = mysqli_connect($host,$user,$password);
$dibi= mysqli_select_db($enlace, $db);




if (isset($_SESSION['tarjeta']))
{
$tarjeta = $_SESSION['tarjeta'];
//$nombre = $_SESSION['nombre'];

echo "SESION INICIADA";
}
else //echo "Please <a href='login.php'>click here</a> to log in.";

header("Location: index.php");



$query = "SELECT * FROM lista WHERE tarjeta='$tarjeta'";
  $result = $enlace->query($query);
  if (!$result) die($connection->error);

  elseif ($result->num_rows)
{
$row = $result->fetch_array(MYSQLI_NUM);
$result->close();
  
echo "Estudiante: $row[0], ID: '$row[1]'";

}



?>




   
</body>
</html>