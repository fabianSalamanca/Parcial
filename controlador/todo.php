<?php
function cargar(){
$consultas = new consultas();
$filas = $consultas->registrarUsuario();

echo "<table>
<tr>
<th>ID</th>
<th>NOMBRE CLIENTE</th>
<th>APELLIDO CONTACTO</th>
<th>NOMBRE CONTACTO</th>
<th>CELULAR</th>
<th>DIRECCION 1</th>
<th>DIRECCION 2</th>
<th>CIUDAD</th>
<th>ESTADO</th>
<th>CODIGO POSTAL</th>
<th>PAIS</th>
<th>NUMERO EMPLEADO REPRESENTANTE DE VENTA</th>
<th>LIMITE DE CREDITO</th>
</tr>";
foreach ($filas as $fila) {
	echo "<tr>";
	echo "<td>".$fila['customerNumber']."</td>";
	echo "<td>".$fila['customerName']."</td>";
	echo "<td>".$fila['contactLastName']."</td>";
	echo "<td>".$fila['contactFirstName']."</td>";
    echo "<td>".$fila['phone']."</td>";
	echo "<td>".$fila['addressLine1']."</td>";
	echo "<td>".$fila['addressLine2']."</td>";
	echo "<td>".$fila['city']."</td>";	
	echo "<td>".$fila['state']."</td>";
	echo "<td>".$fila['postalCode']."</td>";
	echo "<td>".$fila['country']."</td>";
	echo "<td>".$fila['salesRepEmployeeNumber']."</td>";
	echo "<td>".$fila['creditLimit']."</td>";
	echo "</tr>";
}
echo "</table>";
}

function Buscar($customerName){
$consultas = new consultas();
$filas = $consultas->buscarusuarios($customerName);
echo "<table>
<tr>
<th>ID</th>
<th>NOMBRE CLIENTE</th>
<th>APELLIDO CONTACTO</th>
<th>NOMBRE CONTACTO</th>
<th>CELULAR</th>
<th>DIRECCION 1</th>
<th>DIRECCION 2</th>
<th>CIUDAD</th>
<th>ESTADO</th>
<th>CODIGO POSTAL</th>
<th>PAIS</th>
<th>NUMERO EMPLEADO REPRESENTANTE DE VENTA</th>
<th>LIMITE DE CREDITO</th>
</tr>";
if(isset($filas)){
foreach ($filas as $fila) {
	echo "<tr>";
	echo "<td>".$fila['customerNumber']."</td>";
	echo "<td>".$fila['customerName']."</td>";
	echo "<td>".$fila['contactLastName']."</td>";
	echo "<td>".$fila['contactFirstName']."</td>";
    echo "<td>".$fila['phone']."</td>";
	echo "<td>".$fila['addressLine1']."</td>";
	echo "<td>".$fila['addressLine2']."</td>";
	echo "<td>".$fila['city']."</td>";	
	echo "<td>".$fila['state']."</td>";
	echo "<td>".$fila['postalCode']."</td>";
	echo "<td>".$fila['country']."</td>";
	echo "<td>".$fila['salesRepEmployeeNumber']."</td>";
	echo "<td>".$fila['creditLimit']."</td>";
	echo "</tr>";
}
echo "</table>";
}
}

 ?>