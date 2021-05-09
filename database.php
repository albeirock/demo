<?php

$server = 'localhost';
$username = 'albeirock';
$password = '777';
$database = 'votacionx';


try {

$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);

} catch(PDOException $e) {

    die('Su conexión a internet está fallando, por favor intentelo de nuevo: ' .$e->getMessage());
}


?>

