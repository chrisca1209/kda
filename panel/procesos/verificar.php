<?php
$conecta=mysqli_connect('localhost','root','','kda') or die("Error al conectar con la BD");

$b = $_POST['busqueda'];
$sql="select * from maquinas where No_interno_maquina=".$b;
$consulta=mysqli_query($conecta,$sql);
$cont=0;
while($datos=mysqli_fetch_array($consulta)){
    $cont=$cont+1;
    
}
if($cont>0){
    $r=1;
}
else{
    $r=0;
}
echo $r;

?>