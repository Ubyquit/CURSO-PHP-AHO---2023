<?php
//print_r($_POST);

require_once('../config/db.php');

session_start();

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];

    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $usuario = $result->fetch_assoc();

        if (password_verify($password, $usuario[ 'password' ])) {

            $_SESSION[ 'id_usuario' ] = $usuario[ 'id_usuario' ];
            $_SESSION[ 'rol' ] = $usuario[ 'rol' ];

            header('Location: ../pages/principal.php');
        } else {
            echo "Contraseña incorrecta";
            header('Location: ../pages/login.php');
        }

    } else {
        echo "El usuario no existe";
        header('Location: ../pages/login.php');
    }

    $stmt->close();
    $conn->close();
}

?>