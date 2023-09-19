<?php
include('../config/session.php');
check_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
</head>
<body>
<a href="./logout.php">cerrar sesión</a>
    <h1>Super,
    <?php 
    echo $_SESSION[ 'nombre_usuario' ];
    ?> iniciaste sesión</h1>
</body>
</html>