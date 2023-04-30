<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/dados.css">
    <title>Ejercicio 11</title>
</head>
<body>
<h1>Lanzar dados</h1>
<form action="ejercicio11.php" method="post">
    <label for="dados">Seleccione la cantidad de dados</label>
    <select name="dados" id="dados">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    <br>
    <br>
    <button type="submit" name="submit">Elegir cantidad de dados</button>
</form>
<?php
$cantidadDados = $_POST['dados'] ?? '';
$contador = 0;
for ($i=1;$i<=$cantidadDados;$i++){
    $random = random_int(1,6);
    $contador += $random;
    echo '<img src=../imagenes/dados/dado-'.$random.'.png'.'>';
}
if($cantidadDados){
    echo '<h2>'.'Resultado obtenido: '.$contador.'</h2>';
}
?>

</body>
<script type="text/javascript">
    document.getElementById('dados').value = "<?php echo $_POST['dados'];?>";
</script>
</html>
