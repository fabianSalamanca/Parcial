<?php 
require_once('../modelo/clase.php');
require_once('../modelo/consulta.php');

$consultas = new consultas();
$mensaje=$consultas->mayorcompra();

var_export($mensaje);
 ?>