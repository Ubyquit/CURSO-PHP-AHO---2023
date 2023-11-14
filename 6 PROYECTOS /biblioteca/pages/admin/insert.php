<?php

//print_r($_POST);

include('../../config/db.php');

$nombre_libro = $_POST[ 'nombre_libro' ];
$autor = $_POST[ 'autor' ];
$editorial = $_POST[ 'editorial' ];
$fecha_lanzamiento = $_POST[ 'fecha_lanzamiento' ];

$carpeta_portadas = "../../assets/portadas";
$imagen_libro = $_FILES[ 'imagen_libro' ][ 'name' ];
$ruta_portada = $carpeta_portadas . $imagen_libro;

if (move_uploaded_file($_FILES[ 'imagen_libro' ][ 'tmp_name' ], $ruta_portada)) {
    $sql = "INSERT INTO libro (nombre_libro, autor, editorial, fecha_lanzamiento, imagen_libro, estatus) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $portada_libro = $ruta_portada;
    $estatus = "Disponible";

    $stmt->bind_param("ssssss", $nombre_libro, $autor, $editorial, $fecha_lanzamiento, $portada_libro, $estatus);

    if ($stmt->execute()) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error al cargar la portada del libro";
}

?>