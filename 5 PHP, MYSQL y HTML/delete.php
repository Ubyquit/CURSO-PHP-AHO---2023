<?php

//print_r($_GET);

require('conexion.php');

// Variable de la consulta
$sql = "DELETE FROM usuarios WHERE id_usuarios = ?";

$stmt = $conn->prepare($sql);

$stmt -> bind_param("i", $id_usuarios);

$id_usuarios = $_GET[ 'id' ];

$stmt->execute();

header("Location: ./index.php");

?>