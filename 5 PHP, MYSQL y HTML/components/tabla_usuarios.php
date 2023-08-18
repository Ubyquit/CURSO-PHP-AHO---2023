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
    echo "<td><a class='btn btn-warning' href='#'>Editar</a></td>";
    echo "<td><a class='btn btn-danger' href='./delete.php?id={$usuario[ 'id_usuarios' ]}'>Eliminar</a></td>";
    echo "</tr>";
}
?>