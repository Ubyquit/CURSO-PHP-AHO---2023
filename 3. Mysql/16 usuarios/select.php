<?php

require('conexion.php');

// Variable de la consulta
$sql = "SELECT * FROM usuarios WHERE id_usuarios = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id_usuarios);

$id_usuarios = 10;

$stmt->execute();

$resultado = $stmt->get_result();

$usuario = $resultado->fetch_assoc();

echo "\nNombres: {$usuario['nombre']}";
echo "\nApellidos: {$usuario['apellido']}";
echo "\nEmail: {$usuario['email']}";
echo "\nFecha de nacimiento: {$usuario['fecha_nacimiento']}";

?>