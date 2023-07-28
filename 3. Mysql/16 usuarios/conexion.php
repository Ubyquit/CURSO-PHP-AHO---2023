<?php
$servername = "mysql-ahophp.alwaysdata.net";
$username = "ahophp";
$password = "Holamundo2023";
$dbname = "ahophp_usuarios";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn -> connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";

$conn -> close();

?>