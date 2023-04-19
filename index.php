<?php
require_once('Ejercicio1/ejercicio1.php');
require_once('Ejercicio2/ejercicio2.php');
require_once('Ejercicio3/ejercicio3.php');
require_once('Ejercicio4/ejercicio4.php');
require_once('Ejercicio5/ejercicio5.php');
require_once('Ejercicio6/Saludar.php');
?>

<html>
<header>
    <link rel="stylesheet" href="style.css">
</header>
<body>
    <h1>Ignacio Cabral</h1>

    <h2 class="ejercicio">Ejercicio 1</h2>
    <h3>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.
        <br>
        a) función semaforo_a($color): Resuelva la solución utilizando if else<br>
        b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )<br>
        c) función semaforo_c($color): Resuelva la solución utilizando switch<br>
    </h3>
    <div class="ejecucion">
        <?php
        echo "<h4>"."Llamo a semaforo_a('rojo') y devuelve como resultado: ". semaforo_a("rojo")."</h4>";

        echo "<h4>"."Llamo a semaforo_b('amarillo') y devuelve como resultado: ". semaforo_a("amarillo")."</h4>";

        echo "<h4>"."Llamo a semaforo_c('verde') y devuelve como resultado: ". semaforo_a("verde")."</h4>";
        ?>
    </div>


    <h2 class="ejercicio">Ejercicio 2</h2>
    <h3>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
        recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)<sup>2</sup><br>
        a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
        potencia<br>
        b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
        desarrollada del binomio: a<sup>2</sup> + 2*a*b + b<sup>2</sup><br>
    </h3>
    <div class="ejecucion">
        <?php
        echo "<h4>"."Llamo a binomioCuadradoPerfecto_a(2,2) y devuelve como resultado: ". binomioCuadradoPerfecto_a(2,2)."</h4>";

        echo "<h4>"."Llamo a binomioCuadradoPerfecto_b(3,3) y devuelve como resultado: ". binomioCuadradoPerfecto_b(3,3)."</h4>";
        ?>
    </div>


    <h2 class="ejercicio">Ejercicio 3</h2>
    <h3>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
        ambos textos concatenados como uno solo
        <br>
    </h3>
    <div class="ejecucion">
        <?php
        echo "<h4>"."Llamo a concatenar('Hola me llamo', 'Ignacio') y devuelve como resultado: ". concatenar("Hola me llamo", "Ignacio")."</h4>";
        ?>
    </div>


    <h2 class="ejercicio">Ejercicio 4</h2>
    <h3>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1
        <br>
    </h3>
    <div class="ejecucion">
        <?php
        $numero = 41;
        echo 'numero antes de la llamada a la función: ' . $numero . "<br>";
        incrementar($numero);
        echo 'numero después de la llamada a la función: ' . $numero . "<br>";
        ?>
    </div>


    <h2 class="ejercicio">Ejercicio 5</h2>
    <h3>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
        valores.<br>
        a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for<br>
        b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each<br>
        c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while<br>
    </h3>
    <div class="ejecucion">
        <?php
        $array = array(1, 2, 3, 4, 5);
        echo "array para los ejemplos: [1,2,3,4,5]";
        echo "<h4>"."Llamo a sumatoria_a([1,2,3,4,5]) y devuelve como resultado: ". sumatoria_a($array)."</h4>";

        echo "<h4>"."Llamo a sumatoria_b([1,2,3,4,5]) y devuelve como resultado: ". sumatoria_a($array)."</h4>";

        echo "<h4>"."Llamo a sumatoria_c([1,2,3,4,5]) y devuelve como resultado: ". sumatoria_a($array)."</h4>";
        ?>
    </div>

</body>
</html>
