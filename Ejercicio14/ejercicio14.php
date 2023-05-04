<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio14</title>
</head>
<body>
    <h1>Matrices Cuadradas</h1>

    <form action="procesa.php" method="POST">
        <label for="numero">Ingrese número de filas y columnas de la matriz:</label>
        <input type="number" name="tamanio" id="tamanio" min="2">
        <br>
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    $error = $_GET['error'] ?? '';
    if($error){
        echo '<h3 style="color:red;">Error elija el tamaño de la matriz</h3>';
    }
    ?>
</body>
</html>
