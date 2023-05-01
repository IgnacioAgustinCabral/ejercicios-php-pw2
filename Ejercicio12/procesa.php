<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
    <a href="ejercicio12.php">Volver</a>
    <?php
    $visitantes = json_decode(file_get_contents('../lista-visitantes.json'),true);
    $cantidadVisitas = 0;
    foreach ($visitantes as $alien){
        if($alien['planeta']!= 'Tierra'){
            $cantidadVisitas++;
        }
    }
    echo '<h2>Cantidad de visitas que no son de la Tierra: '.$cantidadVisitas.'</h2>';
    ?>
    <table style="width:100%">
        <tr>
            <th>Nombre</th>
            <th>Planeta</th>
        </tr>
        <?php
        $visitantes = json_decode(file_get_contents('../lista-visitantes.json'),true);
        foreach ($visitantes as $alien){
            if($alien['planeta']!= 'Tierra'){
                echo
                    '<tr>'.
                        '<td>'.$alien['nombre'].'</td>'.
                        '<td>'.$alien['planeta'].'</td>'.
                    '</tr>';
            }
        }
        ?>
    </table>
</body>
</html>
