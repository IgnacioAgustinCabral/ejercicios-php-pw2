<?php
function binomioCuadradoPerfecto_a($num1, $num2)
{
    return (pow($num1 + $num2, 2));
}

function binomioCuadradoPerfecto_b($num1, $num2)
{
    return pow($num1, 2) + 2 * $num1 * $num2 + pow($num2, 2);
}