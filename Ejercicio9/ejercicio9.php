<html>
<link rel="stylesheet" href="../css/ejercicio9.css">
<body>
    <h1>Insta-gramo</h1>

    <div class="container">
        <div class="hijo">
            <img src="../imagenes/edificio.jpg" alt="Edificio alto de cristal">
            <h2>Edificio alto</h2>
        </div>

        <div class="hijo">
            <img src="../imagenes/subte.jpg" alt="Metro de Londres">
            <h2>Metro de Londres</h2>

        </div>

        <div class="hijo">
            <img src="../imagenes/mesa.jpg" alt="mesa">
            <h2>Mesa</h2>
        </div>
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



