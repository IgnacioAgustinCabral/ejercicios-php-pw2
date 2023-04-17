<?php
function semaforo_a($color)
{
    if ($color == "verde") {
        return "avance";
    } else if ($color == "amarillo") {
        return "precaución";
    } else if ($color == "rojo") {
        return "frene";
    } else {
        return "estado desconocido";
    }
}

function semaforo_b($color)
{
    return (
    ($color == "verde") ? "avance" :
        (($color == "amarillo") ? "precaución" :
            (($color == "rojo") ? "frene" : "estado desconocido"))
    );

}

function semaforo_c($color)
{
    switch ($color) {
        case $color == "verde":
            return "avance";
            break;
        case $color == "amarillo":
            return "precaución";
            break;
        case $color == "rojo":
            return "frene";
            break;
        default :
            return "estado desconocido";
    }
}

