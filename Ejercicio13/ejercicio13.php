<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Ejercicio13</title>
</head>
<body>
    <h1>Menú del dia</h1>
    <?php
    $error = $_GET['error'] ?? '';
    if($error){
        echo '<h3 style="color:red;">Error elija una opción</h3>';
    }
    ?>
    <form action="procesa.php" method="post">
        <label for="entrada">Entrada</label>
        <input type="checkbox" value="entrada" name="entrada" id="entrada">
        <br>
        <br>

        <label for="plato_principal">Plato Principal</label>
        <input type="checkbox" value="plato_principal" name="plato_principal" id="plato_principal">
        <br>
        <br>

        <label for="acompaniamiento">Acompañamiento</label>
        <input type="checkbox" value="acompaniamiento" name="acompaniamiento" id="acompaniamiento">
        <br>
        <br>

        <label for="postre">Postre</label>
        <input type="checkbox" value="postre" name="postre" id="postre">
        <br>
        <br>
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>
<?php
?>