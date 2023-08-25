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
    echo "<td><a class='btn' href='./form-update.php?id={$usuario[ 'id_usuarios' ]}'><i class='bi bi-pencil-square' style='font-size: 1.3rem; color: #ffbb00;'></i></a></td>";
    echo "<td><a class='btn' href='./delete.php?id={$usuario[ 'id_usuarios' ]}'><i class='bi bi-trash2-fill' style='font-size: 1.3rem; color: #ff0000;'></i></a></td>";
    echo "</tr>";
} ?>