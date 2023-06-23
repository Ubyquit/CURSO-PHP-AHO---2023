<?php
$diaSemana = "Miércoles";

switch ($diaSemana) {
    case "Lunes":
        echo "Hoy es lunes. Ánimo, comienza la semana.";
        break;
    case "Martes":
    case "Miércoles":
    case "Jueves":
        echo "Hoy es un día laboral. Sigue adelante.";
        break;
    case "Viernes":
        echo "¡Es viernes! ¡Fin de semana pronto!";
        break;
    default:
        echo "Es fin de semana!";
}

?>