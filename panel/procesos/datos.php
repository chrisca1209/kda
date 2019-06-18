<?php
$id=$_POST['id'];
$conecta=mysqli_connect('localhost','root','','kda');
$sql="select * from maquinas where No_Inter_Maquina='$id';";
$consulta=mysqli_query($conecta,$sql);

while($datos=mysqli_fetch_array($consulta)){
    $numcon=$datos['No_Inter_Maquina'];
    $supervi=$datos['Supervisor'];
    $tipomaquina=$datos['Tipo_Maquina'];
    $marca=$datos['Marca'];
    $modelo=$datos['Modelo'];
    $numserie=$datos['No_Serie'];
    $pro=$datos['Propiedad'];
}
$info=array($numcon,$supervi,$tipomaquina,$marca,$modelo,$numserie,$pro);

//echo $info[0];

//echo '<scrip>function</script>';

for($i=0; $i < count($info); $i++){
    echo $info[$i];
    echo '|';
}

?>