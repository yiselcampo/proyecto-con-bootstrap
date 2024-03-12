<?php
$servername ="localhost";
$username="root";
$passwoord="";
$database="crud_php";
//crear la conexion
$conn= new mysqli($servername,$username, $passwoord, $database);

//verifique la conexion
if ($conn->connect_error) {
    die("conexion fallida a la base de datos:" .$conn->connect_error);
}