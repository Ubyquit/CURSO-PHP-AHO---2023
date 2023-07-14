<?php

// ! Arreglos asociativos, clave => valor
// Costo por el tipo de flor
// !Cantidad de flores => Stock o inventario
$flores = array("Rosas" => 20,"Tulipanes" => 10,"Girasoles" => 5);

foreach ($flores as $flor => $cantidadFlores){
    echo "Flor: {$flor}, Cantidad: {$cantidadFlores} piezas \n";
}

?>