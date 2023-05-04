<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/imagen.css">
    <title>Ejercicio10 Imagen</title>
</head>
<body>
    <div class="container">
        <?php
        $imagen = $_GET['imagen'];
        echo '<h2>'.ucfirst(trim($imagen,'.jpg')).'</h2>'.
            '<img src=../public/imagenes/'.$imagen.'>';
        ?>
    </div>


</body>
</html>
