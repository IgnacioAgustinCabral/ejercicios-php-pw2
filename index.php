<?php
require_once('Ejercicio1/ejercicio1.php');
require_once('Ejercicio2/ejercicio2.php');
require_once('Ejercicio3/ejercicio3.php');
require_once('Ejercicio4/ejercicio4.php');

//Ejercicio 1
echo semaforo_a("rojo") . "\n";
echo semaforo_b("amarillo") . "\n";
echo semaforo_c("verde") . "\n";

//Ejercicio 2
echo binomioCuadradoPerfecto_a(2, 2) . "\n";
echo binomioCuadradoPerfecto_b(2, 2) . "\n";

//Ejercicio 3
echo concatenar("Hola me llamo", "Ignacio") . "\n";

//Ejercicio 4
$numero = 41;
echo 'numero antes de la llamada a la función: ' . $numero . "\n";
incrementar($numero);
echo 'numero después de la llamada a la función: ' . $numero . "\n";
