<?php
/*
*$respuesta -> Esto es un parametro porque es 
*parte de la sintaxis de la función.

!$respuestaChicaTrue = "Si"; -> Esto es un argunmento
!porque es parte de la llamada de la función.
*/ 

function quieresSerMiNovia($respuesta){
    if($respuesta == "Si"){
        echo "Estoy Feliz \n";
    }else{
        echo "Estoy triste \n";
    }
}

$respuestaChicaTrue = "Si";
$respuestaChicaFalse = "Te veo como mi mejor amigo";

quieresSerMiNovia($respuestaChicaTrue);
quieresSerMiNovia($respuestaChicaFalse);
?>