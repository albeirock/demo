<?php

$doc =new DOMDocument();
$doc->load("questions/1.xml");
$preguntas=$doc->getElementsByTagName("preguntas");



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
   
   

 

<section class="tarjeton">


  <div class="column">
    <div class="card">


        <div class="card">
PRUEBA SABER 2021
</div>  
             

         <?php



            foreach($preguntas as $pregunta)
         {
            $id = $pregunta->getElementsByTagName("id_pregunta");
            $id_pregunta=$id->item(0)->nodeValue ;

            $grafi = $pregunta->getElementsByTagName("grafico");
            $grafico=$grafi->item(0)->nodeValue ;

            $pregu = $pregunta->getElementsByTagName("pregunta");
            $pregunt=$pregu->item(0)->nodeValue ;


            $imag = $pregunta->getElementsByTagName("imagen");
            $imagen=$imag->item(0)->nodeValue ;

           
            

         ?>

<div class="card">
<?php echo "Pregunta N°", $id_pregunta ?>
</div>

<div class="card">
<img src="<?php echo $grafico ?>" ?>
</div>

<div class="card">
<img src="<?php echo $pregunt ?>" ?>
</div>
<div class="card">
<img src="<?php echo $imagen ?>" ?>
</div>
         
          
          <?php
            }
         ?>

         

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