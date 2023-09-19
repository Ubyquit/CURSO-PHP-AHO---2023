<?php

// cerrar la sesión

session_start();

session_destroy();

header("Location: ../pages/login.php");

    ?>