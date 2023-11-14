<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: aliceblue;">
    <main>



        <?php
        require('conexion.php');

        // Variable de la consulta
        $sql = "SELECT * FROM usuarios WHERE id_usuarios = ?";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("i", $id_usuarios);

        $id_usuarios = $_GET[ 'id' ];

        $stmt->execute();

        $resultado = $stmt->get_result();

        $usuario = $resultado->fetch_assoc();
        ?>
        <div class="container" style="margin-top: 10vw;">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Actualizar usuario</h3>
                            <form action="./update.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nombres</label>
                                    <input name="nombre" value='<?php echo "{$usuario[ 'nombre' ]}" ?>' type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apellido</label>
                                    <input name="apellido" value='<?php echo "{$usuario[ 'apellido' ]}" ?>' type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" value='<?php echo "{$usuario[ 'email' ]}" ?>' type="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fecha de nacimiento</label>
                                    <input name="fecha_nacimiento" value='<?php echo "{$usuario[ 'fecha_nacimiento' ]}" ?>' type="date" class="form-control">
                                </div>

                                <input name="id" value='<?php echo "{$usuario[ 'id_usuarios' ]}" ?>' type="hidden">

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
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