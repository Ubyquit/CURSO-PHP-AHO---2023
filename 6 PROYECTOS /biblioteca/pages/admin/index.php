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
        <div class="container" style="margin-top: 10vw;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Formulario de usuario</h3>
                            <form action="./insert.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Nombre del libro</label>
                                    <input name="nombre_libro" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Autor</label>
                                    <input name="autor" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Editorial</label>
                                    <input name="editorial" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fecha de lanzamiento</label>
                                    <input name="fecha_lanzamiento" type="date" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Sube la portada</label>
                                    <input class="form-control" type="file" name="imagen_libro" accept="image/*" id="formFile">
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tabla de usuario</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Nombre del libro</th>
                                            <th scope="col">Autor</th>
                                            <th scope="col">Editorial</th>
                                            <th scope="col">Fecha de lanzamiento</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require('../../config/db.php');
                                        require('../../includes/funciones.php');

                                        $sql = "SELECT * FROM libro";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->execute();
                                        $resultado = $stmt->get_result();
                                        $libros = $resultado->fetch_all(MYSQLI_ASSOC);

                                        while ($libro = array_shift($libros)) {
                                            echo "<tr>";
                                            echo "<td>{$libro[ 'id_libro' ]}</td>";
                                            echo "<td><img src='{$libro[ 'imagen_libro' ]}' width='75px'></td>";
                                            echo "<td>{$libro[ 'nombre_libro' ]}</td>";
                                            echo "<td>{$libro[ 'autor' ]}</td>";
                                            echo "<td>{$libro[ 'editorial' ]}</td>";
                                            echo "<td>{$libro[ 'fecha_lanzamiento' ]}</td>";
                                            echo disponible($libro[ 'estatus' ]);
                                            echo "<td><a class='btn' href='./form-update.php?id={$libro[ 'id_libro' ]}'><i class='bi bi-pencil-square' style='font-size: 1.3rem; color: #ffbb00;'></i></a></td>";
                                            echo "<td><a class='btn' href='./delete.php?id={$libro[ 'id_libro' ]}'><i class='bi bi-trash2-fill' style='font-size: 1.3rem; color: #ff0000;'></i></a></td>";
                                            echo "</tr>";
                                        } ?>
                                    </tbody>
                                    <img width>
                                </table>
                            </div>
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