<?php

print_r($_POST);

require('conexion.php');

// Variable de la consulta
$sql = "UPDATE usuarios
SET nombre = ?, apellido = ?, email = ?, fecha_nacimiento = ?
WHERE id_usuarios = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssi", $nombre, $apellido, $email, $fecha_nacimiento, $id_usuarios);

$nombre = $_POST[ 'nombre' ];
$apellido = $_POST[ 'apellido' ];
$email = $_POST[ 'email' ];
$fecha_nacimiento = $_POST[ 'fecha_nacimiento' ];
$id_usuarios = $_POST[ 'id' ];

$stmt->execute();


header("Location: ./index.php");
?>