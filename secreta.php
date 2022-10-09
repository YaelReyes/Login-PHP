<?php
session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>

<h1>Bienvenido Usuario ADMIN
</h1>

El control de la empresa esta al alcance de su teclado<br>
<br>
<a href="logout.php">Cerrar sesión</a>
