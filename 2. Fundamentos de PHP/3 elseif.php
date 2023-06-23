<?php
$chetos = 45;
$taquis = 40;
$chetitos = 15;
$cartera = 10;

if ($chetos <= $cartera) {
    echo "Puedo comprar mis chetos";
} elseif ($taquis <= $cartera) {
    echo "Puedo comprar mis taquis";
} else {
    echo "Pero puedo comprar los chetitos de: $ {$chetitos}";
}

?>