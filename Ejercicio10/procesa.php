<?php
$archivo = $_POST['archivo'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$error = $_GET['error'] ?? '';
$submit = $_POST['submit'] ?? '';

if (!$error) {
    if (!empty($archivo) && !empty($nombre)) {
        header('Location:ejercicio10.php');
    } else {
        header('Location:ejercicio10.php?error=1');
    }
    exit();
}