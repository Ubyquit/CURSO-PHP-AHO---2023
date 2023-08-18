<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-color: aliceblue;">
    <main>
        <div class="container" style="margin-top: 10vw;">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Formulario de usuario</h3>
                            <form action="./insert.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nombres</label>
                                    <input name="nombre" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input name="apellido" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fecha de nacimiento</label>
                                    <input name="fecha_nacimiento" type="date" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tabla de usuario</h3>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Fecha de nacimiento</th>
                                        <th scope="col">Actualizar</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    require('conexion.php');

                                    $sql = "SELECT * FROM usuarios";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->execute();
                                    $resultado = $stmt->get_result();
                                    $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);

                                    while ($usuario = array_shift($usuarios)) {
                                        echo "<tr>";
                                        echo "<td>{$usuario[ 'id_usuarios' ]}</td>";
                                        echo "<td>{$usuario[ 'nombre' ]}</td>";
                                        echo "<td>{$usuario[ 'apellido' ]}</td>";
                                        echo "<td>{$usuario[ 'email' ]}</td>";
                                        echo "<td>{$usuario[ 'fecha_nacimiento' ]}</td>";
                                        echo "<td><a class='btn btn-warning' href='./update.php'>Editar</a></td>";
                                        echo "<td><a class='btn btn-danger' href='./delete.php?id={$usuario[ 'id_usuarios' ]}'>Eliminar</a></td>";
                                        echo "</tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>