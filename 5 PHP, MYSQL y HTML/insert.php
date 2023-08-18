<?php

//print_r($_POST);

require('conexion.php');

// Creación de la consulta INSERT
$sql = "INSERT INTO usuarios (nombre,apellido,email,fecha_nacimiento) 
VALUES (?,?,?,?)";

// Preparar los datos a enviar
$stmt = $conn->prepare($sql);

// Asociar valores a la consulta
$stmt->bind_param("ssss",$nombre, $apellido, $email, $fecha_nacimiento);

// Asociar valores
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// Ejecutar la sentencia preparada

$stmt -> execute();

header('Location: index.php');
?>