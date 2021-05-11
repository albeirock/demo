<?php

verificar_voto();
$nombre = $_POST['nombre'];
$tarjeta = $_POST['tarjeta'];

function verificar_registro(){

$nombre = $_POST['nombre'];
$tarjeta = $_POST['tarjeta'];
$host = "localhost";
$user = "albeirock";
$password = "777";
$db = "votacionx";
$tabla = "lista";
$enlace = mysqli_connect($host,$user,$password);
$dibi= mysqli_select_db($enlace, $db);

     if ($enlace->connect_errno) {

         echo "Su conexión a Internet está fallando, vuelva a intentarlo...: (" . $enlace->connect_errno . ") " . $enlace->connect_error;
           
     } 
             else
           
           { 
                              
               $consultaT = mysqli_query($enlace, "SELECT nombre FROM lista WHERE tarjeta = '$tarjeta'");
               $rowcountT=mysqli_num_rows($consultaT);

               if ( $rowcountT>0 ) {
                   
                    mysqli_query($enlace,"INSERT INTO votantes(nombre,tarjeta) VALUES ('$nombre','$tarjeta')");
                    sesionx();

                                 
                    
               
                }

                
               else {   

                         
        echo "<script> 
        
        alert('ESTUDIANTE NO REGISTRADO! Escriba un mensaje a: gipideas@gipideas.com ');
        window.location='index.php'; 
        
                     
        </script>";
                                   
                 
              
                 
                    
                    // printf('<br><br><br><br><section class="sesion-hero">
                    // <br><h1>"ESTUDIANTE NO REGISTRADO"<br><h4><center>DIRIJASE HACIA 
                    // EL DOCENTE PARA SER REGISTRADO</center>');
               }
          }                             
                    

        }





function verificar_voto(){

    $nombre = $_POST['nombre'];
    $tarjeta = $_POST['tarjeta'];
    $host = "localhost";
    $user = "albeirock";
    $password = "777";
    $db = "votacionx";
    $tabla = "lista";
    $enlace = mysqli_connect($host,$user,$password);
    $dibi= mysqli_select_db($enlace, $db);

     if ($enlace->connect_errno) {

         echo "LLAME AL PROFESOR ALBEIRO: (" . $enlace->connect_errno . ") " . $enlace->connect_error;
           
     } 
             else
           
           { 
               
               $consultaNv = mysqli_query($enlace, "SELECT nombre FROM votantes WHERE nombre = '$nombre'");
               $rowcountNv= mysqli_num_rows($consultaNv);
               $consultaTv = mysqli_query($enlace, "SELECT nombre FROM votantes WHERE tarjeta = '$tarjeta'");
               $rowcountTv= mysqli_num_rows($consultaTv);
               
               $consultaT = mysqli_query($enlace, "SELECT nombre FROM lista WHERE tarjeta = '$tarjeta'");
               $rowcountT=mysqli_num_rows($consultaT);
               


               if ($rowcountNv>0 || $rowcountTv>0 ) {   
                                                       
        echo "<script> 
        
                alert('YA INICIÓ LA PRUEBA');
                window.location='preguntas.php'; 
                
        
                     
        </script>";

        sesionx();        
               }                      
                    
               else {
                 
                 verificar_registro();
                    
               }

          }        

}


function sesionx(){

  $nombre = $_POST['nombre'];
  $tarjeta = $_POST['tarjeta'];
  $host = "localhost";
  $user = "albeirock";
  $password = "777";
  $db = "votacionx";
  $enlace = mysqli_connect($host,$user,$password);
  $dibi= mysqli_select_db($enlace, $db);

  session_start();
  //$_SESSION['nombre'] = $nombre;
  $_SESSION['tarjeta'] = $tarjeta;

  $query = "SELECT * FROM lista WHERE tarjeta='$tarjeta'";
  $result = $enlace->query($query);
  if (!$result) die($connection->error);

  elseif ($result->num_rows)
{
$row = $result->fetch_array(MYSQLI_NUM);
$result->close();
  
echo "Hi $row[0], ID: '$row[1]'";

/*echo "<script> 
        
                alert('bienvenido a la prueba');
                 
                             
      </script>";*/

      
      echo "<script> 
        
      window.location='preguntas.php'; 
      
                   
      </script>";




}

}




?>

