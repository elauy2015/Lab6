<?php

require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usermongo:Contrasenia@cluster0.uohoiat.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion = $cliente->selectDataBase("Cluster0");

$tablaColeccion = $conexion->usuario;

$resultado = $tablaColeccion->update(
    ["id" => ($_GET["id"])],
    [
        '$set' => [

            "nombre" => ($_GET["nombre"]),
            "usuario" => ($_GET["usuario"]),
            "password" => ($_GET["password"]),
        ]
    ]
);

echo "Cantida de registros actualizados" . $resultado->getModifiedCount();
