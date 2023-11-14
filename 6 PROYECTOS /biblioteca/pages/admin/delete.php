<?php

//print_r($_GET);

require('../../config/db.php');

// Variable de la consulta
$sql = "UPDATE libro SET estatus = 'No disponible' WHERE id_libro = ?";

$stmt = $conn->prepare($sql);

$stmt -> bind_param("i", $id_usuarios);

$id_usuarios = $_GET[ 'id' ];

$stmt->execute();

header("Location: ./index.php");

?>