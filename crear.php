<?php
include 'plantilla.php';?>
<div class="container">
    <div class="row"

<form action="guardar.php" method="POST">
    Nombre: <input type="text" name="nombre"/><br/>
    Precio: <input type="text" name="precio"/><br/>
    <input type="submit" value="guardar producto">
</form>