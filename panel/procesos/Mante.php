<?php   
$conecta=mysqli_connect('localhost','root','','kda');

$b = $_POST['valor'];
$m = $_POST['mante'];
$sql="update maquinas set mantenimiento='$m' where No_interno_maquina='$b'";
$consulta=mysqli_query($conecta,$sql);

if(!$consulta){
    $r=0;
}else{
    $r=1;
}

echo $r;


?>