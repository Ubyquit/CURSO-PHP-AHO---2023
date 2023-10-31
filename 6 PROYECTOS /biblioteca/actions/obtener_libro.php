<?php

require_once('../config/db.php');
include('../config/session.php');

check_session();


$id_libro = $_GET[ 'id_libro' ];
$id_usuario = $_SESSION[ 'id_usuario' ];

$sql = "INSERT INTO usuario_libro (id_usuario, id_libro) VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param('ii', $id_usuario, $id_libro);

$stmt->execute();

header('Location: ../pages/principal.php');

?>