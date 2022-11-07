<?php

require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usermongo:Contrasenia@cluster0.uohoiat.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion = $cliente->selectDataBase("Cluster0");

$tablaColeccion = $conexion->usuario;

$resultado = $tablaColeccion->find();

foreach ($resultado as $r) {
    echo $r->_id . " - " . $r->id . " - " . $r->nombre  . " - " . $r->usuario  . " - " . $r->password . " - " . $salt .  "<br>";
}
