<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio12</title>
</head>
<body>
<h1>Contador de visitas... extraterrestres</h1>

<form action="ejercicio12.php" method="post">
    <label for="name">Ingrese su nombre:</label>
    <input type="text" name="nombre">
    <br>
    <br>
    <label for="planeta">Ingrese su planeta:</label>
    <select name="planeta" id="planeta">
        <option value=""></option>
        <option value="mercurio">Mercurio</option>
        <option value="venus">Venus</option>
        <option value="tierra">Tierra</option>
        <option value="marte">Marte</option>
        <option value="jupiter">Júpiter</option>
        <option value="saturno">Saturno</option>
        <option value="urano">Urano</option>
        <option value="neptuno">Neptuno</option>
    </select>
    <br>
    <br>
    <button type="submit" name="submit">Enviar</button>
</form>
<?php
$error = $_GET['error'] ?? '';
if($error){
    echo '<h2 style="color:red">Error complete los campos</h2>';
}
?>
</body>
</html>

<?php
$nombre = $_POST['nombre'] ?? '';
$planeta = $_POST['planeta'] ?? '';
$visitante = array("nombre" => $nombre, "planeta" => ucfirst($planeta));

if(isset($_POST['submit'])){
    if(!empty($nombre) && !empty($planeta)){
        if (filesize('../lista-visitantes.json') == 0) {
            $primerVisitante = array($visitante);
            $dataAGuardar = $primerVisitante;
        } else {
            $json = json_decode(file_get_contents('../lista-visitantes.json'));

            array_push($json, $visitante);
            $dataAGuardar = $json;
        }
        if(!file_put_contents('../lista-visitantes.json', json_encode($dataAGuardar, JSON_PRETTY_PRINT), LOCK_EX)){
            $fallo= "Error al guardar el dato";
        } else {
            $exito = "Dato guardado correctamente";
            header('Location:procesa.php');
            exit();
        }
    } else {
        header('Location:ejercicio12.php?error=1');
        exit();
    }
}
?>