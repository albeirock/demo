<?php


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
                              
               $consultaT = mysqli_query($enlace, "SELECT nombre FROM lista WHERE tarjeta = '$tarjeta'");
               $rowcountT=mysqli_num_rows($consultaT);

               if ( $rowcountT>0 ) {
                   
                    mysqli_query($enlace,"INSERT INTO votantes(nombre,tarjeta) VALUES ('$nombre','$tarjeta')");

                    echo "<script> 
        
                    alert('BIENVENIDO A LA PRUEBA'); 
                    window.location='preguntas.php';                   
                             
                    </script>";
                    
               
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
                    


?>