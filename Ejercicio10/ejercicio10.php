<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/ejercicio10.css">
    <title>Ejercicio10</title>
</head>
<body>
<h1>Insta-Reciclado</h1>
<div class="container">
    <?php

    $dir = '../imagenes';
    $imagenes = array_diff(scandir($dir), array('..', '.'));

    foreach ($imagenes as $imagen){

        echo '<a target="_blank" href=imagen.php?imagen='.$imagen.'>'.ucfirst(trim($imagen,'.jpg')).'</a>'.'<br>';
    }
    ?>
</div>


<div class="form-container">
    <?php
    $error = $_GET['error'] ?? '';
    if($error){
        echo '<h2 class="error">ERROR al ingresar nombre o archivo</h2>';
    }
    ?>
    <form action="procesa.php" method="post" enctype="multipart/file-data">
        <h2>Subir imagen</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="archivo">Archivo:</label>
        <input type="file" name="archivo" id="archivo">
        <br>
        <button type="submit" name="submit">Subir imagen</button>
    </form>
</div>

</body>
</html>
