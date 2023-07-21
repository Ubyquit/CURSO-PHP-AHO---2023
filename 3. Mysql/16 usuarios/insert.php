<?php

require('conexion.php');

// Creación de la consulta INSERT
$sql = "INSERT INTO usuarios (nombre,apellido,email,fecha_nacimiento) 
VALUES (?,?,?,?)";

// Preparar los datos a enviar
$stmt = $conn->prepare($sql);

// Asociar valores a la consulta
$stmt->bind_param("ssss",$nombre, $apellido, $email, $fecha_nacimiento);

// Asociar valores
$nombre = "Eduardo Andres";
$apellido = "Villafaña Rejón";
$email = "eduardo@gmail.com";
$fecha_nacimiento = "1994-11-15";


// Ejecutar la sentencia preparada

$stmt -> execute();
?>