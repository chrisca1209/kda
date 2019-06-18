<?php
$id=$_POST['id'];
$conecta=mysqli_connect('localhost','root','','kda');

$mante=$_POST['mante'];
$sqlF="select curdate() as Fecha;";
$consultaF=mysqli_query($conecta,$sqlF);
while($datosF=mysqli_fetch_array($consultaF)){
    $FechaS=$datosF['Fecha'];
}
$fecha=$FechaS;
$sql="insert into mantenimiento values(NULL,'$id','$mante','$fecha')";
$consulta=mysqli_query($conecta,$sql);

echo $r=1;



?>