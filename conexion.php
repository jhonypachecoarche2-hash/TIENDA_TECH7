<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "tienda";

$conn = new mysqli($servidor, $usuario, $password, $bd);

if($conn->connect_error){
    die("Error de conexión: " . $conn->connect_error);
}
?>