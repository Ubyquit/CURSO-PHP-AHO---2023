<?php
include('../config/session.php');
check_session();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Pagina principal</title>
</head>
<body>
<a href="./logout.php">cerrar sesión</a>
    <h1>
    <?php 
    echo $_SESSION[ 'nombre_usuario' ];
    ?> esta es la lista de tus libros</h1>

<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                <div class="card-title">Mis libros</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('../config/db.php');
                        $sql = "SELECT imagen_libro, nombre_libro,autor,editorial
                        FROM usuario_libro
                        INNER JOIN libro
                        ON usuario_libro.id_libro = libro.id_libro
                        WHERE id_usuario = {$_SESSION['id_usuario']}";

                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $resultado = $stmt->get_result();
                        $mis_libros = $resultado->fetch_all(MYSQLI_ASSOC);
                        while ($libro = array_shift($mis_libros)) {
                            echo "<tr>";
                            echo "<td><img src=\"{$libro['imagen_libro']}\" width=\"100\" height=\"100\"></td>";
                            echo "<td>{$libro['nombre_libro']}</td>";
                            echo "<td>{$libro['autor']}</td>";
                            echo "<td>{$libro['editorial']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>