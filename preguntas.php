<?php

$doc =new DOMDocument();
$doc->load("questions/1.xml");
$personas=$doc->getElementsByTagName("personas");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABER</title>
    <link rel="stylesheet" href="assets/css/stylep.css">
    
</head>
<body>
   
   
<div class="card">
<h1>PRUEBA SABER 2021</h1>
</div>

 

<section class="tarjeton">


  <div class="column">
    <div class="card">
        <h3></h3>
  
        <center> <table>
          <thead>
           <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Dirección</th>
              <th>Imagen</th>
           </tr>
          </thead>
         <tbody>





         

         <?php



            foreach($personas as $persona)
         {
            $id = $persona->getElementsByTagName("id_persona");
            $id_persona=$id->item(0)->nodeValue ;

            $name = $persona->getElementsByTagName("nom");
            $nom=$name->item(0)->nodeValue ;

            $mail = $persona->getElementsByTagName("correo");
            $correo=$mail->item(0)->nodeValue ;


            $dire = $persona->getElementsByTagName("direccion");
            $direccion=$dire->item(0)->nodeValue ;

            $dire = $persona->getElementsByTagName("imagen");
            $imagen=$dire->item(0)->nodeValue ;
            

         ?>
            <tr>
                <td><?php echo $id_persona ?></td>
                <td><?php echo $nom ?></td>   
                <td><?php echo $correo ?></td>  
                <td><?php echo $direccion ?></td> 
                <td><img src="<?php echo $imagen ?>" ?></td>


            </tr>
          
          <?php
            }
         ?>

         </tbody>
        </table></center> 

    </div>
  </div>
  
  <div class="columnout">
    <div class="card">
     
    <form name= "contacto" action="destroy.php"  onsubmit="return ocultar()"  method="POST" >
   <div class="row">
    <input type="submit" value="Salir" >
  </div>
   </form>

    </div>
  </div>

  </form>

  </div>   



</section>  




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

echo "";
}
else //echo "Please <a href='login.php'>click here</a> to log in.";

header("Location: index.php");



$query = "SELECT * FROM lista WHERE tarjeta='$tarjeta'";
  $result = $enlace->query($query);
  if (!$result) die($connection->error);

  elseif ($result->num_rows)
{
$row = $result->fetch_array(MYSQLI_NUM);
$result->close(); ?>
 
<div class="card">

<?php echo "Estudiante: $row[0], ID: '$row[1]'"; ?>

</div>

<?php  } ?>








   
</body>
</html>