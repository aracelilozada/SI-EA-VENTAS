<?php
require_once "../conexion.php";
//Variables de la categoria
$name = "Araceli";
$description = " Lozada";
//Validar que los campos no esten vacios
if ($name == "" || $descripcion == "") {
    echo "Error, campos vacios";
    die();
}
//preparamos el array con los datos
$arrDate = array(
    $name,
    $descripction
);
//preparamos la consulta 
$sql = "INSERT INTO categories (c_name,c_description) VALUES(?,?);";
try {
    //preparamos la consulta con la conexion
    $prepared = $conexion->prepare($sql);
    $prepared->execute($arrDate);
    echo "Datos guardados";
} catch (PDOException $e) {
    echo "Erro:" . $e->getMessage();
}
