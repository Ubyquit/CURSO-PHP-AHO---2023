<?php
//print_r($_POST);

require_once('../config/db.php');

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $nombre_usuario = $_POST[ 'nombre_usuario' ];
    $apellido = $_POST[ 'apellido' ];
    $email = $_POST[ 'email' ];
    $password = password_hash($_POST[ 'password' ], PASSWORD_DEFAULT);
    $rol = 2;

    // sql query

    $sql = "INSERT INTO usuario (nombre_usuario, apellido, email, password, rol)
    VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssi", $nombre_usuario, $apellido, $email, $password, $rol);

    if ($stmt->execute()) {
        header('Location: ../pages/login.php');
    } else {

        //echo "Error al registrar el usuario: " . $stmt->error;
        echo "<h1>Error al registrar el usuario: Correo electrónico ya registrado</h1>";

        header('refresh:5;url=../pages/registro.php');
    }

    $stmt->close();

    $conn->close();
}
?>