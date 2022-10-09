<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>

<h1>Bienvenido Empleado
</h1>

A trabajar si es que quieres tu quincena<br>
<br>
<a href="logout.php">Cerrar sesión</a>
