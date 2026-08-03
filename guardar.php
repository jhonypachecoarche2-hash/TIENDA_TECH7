<?php

include("conexion.php");

$nombre_cliente = $_POST['nombre_cliente'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$articulo = $_POST['articulo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$problema = $_POST['problema'];

$sql = "INSERT INTO articulos
(nombre_cliente,dni,telefono,articulo,marca,modelo,problema)
VALUES
('$nombre_cliente','$dni','$telefono','$articulo','$marca','$modelo','$problema')";

if($conn->query($sql)==TRUE){

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<meta http-equiv="refresh" content="3;url=index.php">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<title>Registro Guardado</title>

<style>

body{

background:#eef5ff;

display:flex;

justify-content:center;

align-items:center;

height:100vh;

}

.card{

padding:40px;

border:none;

border-radius:15px;

box-shadow:0px 10px 30px rgba(0,0,0,.2);

text-align:center;

}

i{

font-size:70px;

color:green;

}

</style>

</head>

<body>

<div class="card">

<i class="fa-solid fa-circle-check"></i>

<h2 class="mt-3">

¡Registro guardado!

</h2>

<p>

Los datos fueron almacenados correctamente en la base de datos.

</p>

<a href="index.php" class="btn btn-primary">

Volver al formulario

</a>

</div>

</body>

</html>

<?php

}else{

echo "Error: ".$conn->error;

}

$conn->close();

?>