<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio13</title>
</head>
<body>
<a href="ejercicio13.php">Volver</a>
<br>

<h2>Usted ha elegido para comer:</h2>

</body>
</html>
<?php
$entrada = $_POST['entrada'] ?? '';
$plato_principal = $_POST['plato_principal'] ?? '';
$acompaniamiento = $_POST['acompaniamiento'] ?? '';
$postre = $_POST['postre'] ?? '';

$elecciones = [
    $entrada,
    $plato_principal,
    $acompaniamiento,
    $postre
];

$menu = parse_ini_file('./menu.ini');

if (empty($entrada) && empty($plato_principal) && empty($acompaniamiento) && empty($postre)) {
    header('Location:ejercicio13.php?error=1');
    exit();
} else {
    foreach ($elecciones as $eleccion) {
        if (array_key_exists($eleccion, $menu)) {
            echo $menu[$eleccion] . '<br>';
        }
    }
}
?>