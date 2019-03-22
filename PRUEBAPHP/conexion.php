<?php
 
 $server= "localhost";
 $usuario="root";
 $password= "";
 $db="eventos";

$mysqli = new mysqli($server,$usuario,$password,$db);


if ($mysqli->connect_error) {
    die('¡Ups! Error de conexión' . $mysqli->connect_error);
}

  $cc='¡Conectado exitosamente!';

 ?>