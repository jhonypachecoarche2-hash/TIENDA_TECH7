<?php

include("conexion.php");

$sql="SELECT * FROM articulos";
$resultado=$conn->query($sql);

echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>Cliente</th>
<th>DNI</th>
<th>Teléfono</th>
<th>Artículo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Problema</th>
<th>Fecha</th>
</tr>";

while($fila=$resultado->fetch_assoc()){

echo "<tr>
<td>".$fila['id']."</td>
<td>".$fila['nombre_cliente']."</td>
<td>".$fila['dni']."</td>
<td>".$fila['telefono']."</td>
<td>".$fila['articulo']."</td>
<td>".$fila['marca']."</td>
<td>".$fila['modelo']."</td>
<td>".$fila['problema']."</td>
<td>".$fila['fecha_registro']."</td>
</tr>";

}

echo "</table>";

$conn->close();

?>