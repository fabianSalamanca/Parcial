<?php 
require_once('../modelo/clase.php');
require_once('../modelo/consulta.php');
echo "<form method='get'>
    		<input type='text' name='buscar'>
    		<input type='submit' value='Buscar'>
    	</form>";
if(isset($_GET['buscar'])){
$customerName=$_GET['buscar'];
$consultas = new consultas();
$mensaje=$consultas->buscarusuarios($customerName);
print_r( $mensaje);




}
 ?>