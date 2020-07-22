<?php
	require_once(conexion1.php);
	if(isset($_POST['$name'])){
		$query = "insert into Prueba (nombre, ap_p, ap_m, dir, ciu, edad, fecha_n) values (".$_POST['$name'].",".$_POST['$ape_p'].",".$_POST['$ape_m'].",".$_POST['$dir'].",".$_POST['$ciu'].",".$_POST['$edad'].",".$_POST['$nac'].")";
	}
?>