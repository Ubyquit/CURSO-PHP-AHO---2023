<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <?php include_once("./includes/nav.html"); ?>
  </header>
  <main>
    <!-- Cards para los libros -->

    <div class="container">
      <div class="row justify-content-center align-items-center g-2 mt-5">
        <?php
        require('./config/db.php');

        $sql = "SELECT * FROM libro";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $libros = $resultado->fetch_all(MYSQLI_ASSOC);

        while ($libro = array_shift($libros)) {
        echo "<div class='col-sm-3'>
                  <div class='card' >
                    <img src='{$libro[ 'imagen_libro' ]}' class='card-img-top'>
                    <div class='card-body'>
                    <h5 class='card-title'>{$libro[ 'nombre_libro' ]}</h5>
                    <p class='card-text'>{$libro[ 'autor' ]}</p>
                    <p class='card-text'>{$libro[ 'editorial' ]}</p>
                    <P class='card-text'>{$libro[ 'fecha_lanzamiento' ]}</P>
                    <a href='./actions/obtener_libro.php?id_libro={$libro[ 'id_libro' ]}' class='btn btn-primary'>Obtener libro</a>
                    </div>
                  </div>
              </div>";
        } ?>
      </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>