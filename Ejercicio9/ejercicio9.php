<html>
<link rel="stylesheet" href="../css/ejercicio9.css">
<body>
    <h1>Insta-gramo</h1>

    <div class="container">
        <?php
        $dir = '../public/imagenes';
        $imagenes = array_diff(scandir($dir), array('..', '.'));
        foreach ($imagenes as $imagen){
            echo '<div class="hijo">'
                    .'<img src=../public/imagenes/'.$imagen.'>'.
                    '<h2>'.ucfirst(trim($imagen,'.jpg')).'</h2>'.
                   '</div>';
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
        <form action="ejercicio9.php" method="post" enctype="multipart/file-data">
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

<?php
$archivo = $_POST['archivo'] ?? '';
$nombre = $_POST['nombre'] ?? '';
if(isset($_POST['submit'])){
    if (!empty($archivo) && !empty($nombre)) {
        header('Location:ejercicio9.php');
    } else {
        header('Location:ejercicio9.php?error=1');
    }
    exit();
}
?>

</body>
</html>



