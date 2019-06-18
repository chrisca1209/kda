<?php   
$conecta=mysqli_connect('localhost','root','','kda');

$b = $_POST['valor'];
$m = $_POST['mante'];
$sql="update maquinas set Mantenimiento='$m' where No_Inter_Maquina='$b'";
$consulta=mysqli_query($conecta,$sql);

if(!$consulta){
    $r=0;
}else{
    $r=1;
}

echo $r;


?>