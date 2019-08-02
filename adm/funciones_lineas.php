<?php
$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
switch($accion){
	case 'agregarlinea1':
	$numero=$_POST['Numero'];
	$descripcion=$_POST['Descripcion'];
	$id_supervisor=$_POST['id_supervisor'];
	$id_supervisor=1;
	//echo $numero.' '.$descripcion;
	include 'conexion.php';
	$sqlfecha="select curdate()";
	$consulta_fecha=mysqli_query($conexion,$sqlfecha);
	$datos=mysqli_fetch_array($consulta_fecha);
	$fecha=$datos[0];
	$sql = "insert into linea_1 (cantidad, descripcion,fecha,id_superv) values (".$numero.",'$descripcion','$fecha',".$id_supervisor.")";
	//$sql='insert into linea_1 (cantidad, descripcion,fecha,id_superv) values ()';
	echo $consulta=mysqli_query($conexion,$sql);
	break;
}
?>