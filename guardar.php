<?php
include 'config.php';
include 'plantilla.php';

$nombre = $_POST['nombre'];
$precio = $_POST['$precio'];

//insertar el producto en la tabla productos
 $sql= "INSERT INTO productos (nombre, precio) Values ('$nombre', '$precio')";

 if ($conn->query($sql)===TRUE){
    header("location:index.php");
 }else{

    echo "Error :".$sql ."<br/>" .$conn->error;

 }
 $conn->close();