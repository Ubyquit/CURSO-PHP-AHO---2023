<?php

$numeros = array(1, 2, 3, 4, 5);

// Contar la cantidad de elementos en un array
$cantidad = count($numeros);
echo "La cantidad de números es: " . $cantidad;

// Obtener el valor máximo y mínimo de un array
$maximo = max($numeros);
$minimo = min($numeros);
echo "El número máximo es: " . $maximo . " y el mínimo es: " . $minimo;

// Ordenar un array en orden ascendente
sort($numeros);
echo "El array ordenado es: " . implode(", ", $numeros);
?>