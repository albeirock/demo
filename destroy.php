<?php

session_start();

if (isset($_SESSION['tarjeta']))
{

$tarjeta = $_SESSION['tarjeta'];

destroy_session_and_data();

echo "<script> 
        
window.location='index.php'; 

             
</script>";




}
else echo "Please <a href='authenticate2.php'>click here</a> to log in.";

function destroy_session_and_data()
{
$_SESSION = array();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
}


?>