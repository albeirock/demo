<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABER</title>
</head>
<body>
   <h1> LAS PREGUNTAS ESTÁN AQUI</h1>


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
$nombre = $_SESSION['nombre'];

echo "";
}
else echo "Please <a href='login.php'>click here</a> to log in.";



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