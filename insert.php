<?php

    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usermongo:LOKdTEOP9hVYCc19@cluster0.uohoiat.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("Cluster0");

    $tablaColeccion = $conexion ->usuario;

    $resultado =$tablaColeccion->insertOne(["id"=>$_GET["id"],
                                            "nombre"=>$_GET["nombre"],
                                            "usuario"=>$_GET["usuario"],
                                            "password"=>$_GET["password"],
                                            "salt"=>$_GET["salt"]]);

    echo "Se inserto el registro ".$resultado->getInsertedId();

?>