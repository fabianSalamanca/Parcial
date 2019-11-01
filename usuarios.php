<?php 
require_once('modelo/clase.php');
require_once('modelo/consulta.php');
require_once('controlador/cargar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Clientes</h1>
    <div>

    </div>
<?php
	 if(isset($_GET['buscar'])){
buscar($_GET['buscar']);
	 }else{
cargar();
	 }
	 
	  ?>
	 
</body>
</html>


 



 