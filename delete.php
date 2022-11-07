<?php
require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usermongo:Contrasenia@cluster0.uohoiat.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion = $cliente->selectDataBase("Cluster0");

$tablaColeccion = $conexion->usuario;


$resultados = $tablaColeccion->deleteOne(["id" => ($_GET["id"])]);

echo "Registros eliminados " . $resultados->getDeletedCount();
