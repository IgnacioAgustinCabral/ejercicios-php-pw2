<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ejercicio14.css">
    <title>Ejercicio14</title>
</head>
<body>
    <a href="ejercicio14.php">Volver</a>
    <br>
    <h1>Matriz Cuadrada</h1>
    <?php
    $tamanio = $_POST['tamanio'] ?? '';
    if(isset($_POST['submit'])) {
        if (!empty($tamanio)) {
            $matriz = [];

            //pongo las filas y columnas correspondientes al input
            for ($i = 0; $i < $tamanio; $i++) {
                $array[$i] = array();
            }

            for ($i = 0; $i < $tamanio; $i++) {
                for ($j = 0; $j < $tamanio; $j++) {
                    $matriz[$i][$j] = rand(1, 99);
                }
            }

            echo "<table>\n";
            foreach ($matriz as $row) {
                echo "<tr>\n";
                foreach ($row as $value) {
                    echo "<td>$value</td>\n";
                }
                echo "</tr>\n";
            }
            echo "</table>\n";

            diagonalPrincipal($matriz);

            diagonalSecundaria($matriz, $tamanio);

            echo '<h2>Valor total matriz</h2>' . valorMatriz($matriz, $tamanio);
        } else {
            header('Location:ejercicio14.php?error=1');
            exit();
        }
    }
    ?>
</body>
</html>

<?php
function diagonalPrincipal($matriz){
    echo '<h2>Diagonal Principal</h2>';
    for ($i = 0; $i < count($matriz); $i++) {
        echo $matriz[$i][$i].' ';
    }
}

function diagonalSecundaria($matriz,$tamanio){
    echo '<h2>Diagonal Secundaria</h2>';
    for ($i = 0; $i < count($matriz); $i++){
        echo $matriz[$i][$tamanio-1-$i].' ';
    }
}

function valorMatriz($matriz,$tamanio){
    $valor = 0;
    for ($i = 0; $i < $tamanio; $i++) {
        for ($j = 0; $j < $tamanio; $j++) {
            $valor += $matriz[$i][$j];
        }
    }
    return $valor;
}

?>