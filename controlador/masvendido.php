<?php 
require_once('../modelo/clase.php');
require_once('../modelo/consulta.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
$consultas = new consultas();
$mensaje=$consultas->eliminarusuario($id);
echo $mensaje;
echo "<div><a href='../usuarios.php'>LISTA USUARIOS</a></div>";
}
 ?>