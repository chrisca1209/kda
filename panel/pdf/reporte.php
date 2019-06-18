<?php
	include 'plantilla.php';
	//require 'conexion.php';

    $conecta=mysqli_connect('localhost','root','','kda');
    $num=$_GET['val'];
    
    $sql="select * from maquinas where No_Inter_Maquina=".$num;
    $consulta=mysqli_query($conecta,$sql);

    while($datos=mysqli_fetch_array($consulta)){
    $numcon=$datos['No_Inter_Maquina'];
    $supervi=$datos['Supervisor'];
    $tipomaquina=$datos['Tipo_Maquina'];
    $marca=$datos['Marca'];
    $modelo=$datos['Modelo'];
    $numserie=$datos['No_Serie'];
    $pro=$datos['Propiedad'];
    //$mante=$datos['Mantenimiento'];
    }

	$pdf = new PDF('P', 'mm', array(140,165));
	$pdf->AliasNbPages();

    $pdf->AddPage();
    //$pdf->Image('TI.png',20,10,40);
	$pdf->SetFillColor(232,232,232);
    $pdf->Ln(1);
    
    //$pdf->Ln(8);
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    //$pdf->
	
	$pdf->Cell(40,6,'No_Inter_Maquina',1,0,'C',1);
    $pdf->Cell(80,6,utf8_decode($numcon),1,1,'C');
$pdf->Ln(1);
    $pdf->Cell(40,6,'Supervisor',1,0,'C',1);
    $pdf->Cell(80,6,utf8_decode($supervi),1,1,'C');
$pdf->Ln(1);
    $pdf->Cell(40,6,'Tipo de Maquina',1,0,'C',1);
    $pdf->Cell(80,6,utf8_decode($tipomaquina),1,1,'C');
$pdf->Ln(1);
    $pdf->Cell(40,6,'Marca',1,0,'C',1);
    $pdf->Cell(80,6,utf8_decode($marca),1,1,'C');
$pdf->Ln(1);
    $pdf->Cell(40,6,'No. Serie',1,0,'C',1);
    $pdf->Cell(80,6,utf8_decode($numserie),1,1,'C');
$pdf->Ln(1);
    
$sqlM="select * from mantenimiento where No_Inter_Maquina=".$num ;
$consultaM=mysqli_query($conecta,$sqlM);
$pdf->Cell(40,6,'Fecha',1,0,'C',1);
$pdf->Cell(80,6,'Mantenimiento',1,1,'C',1);

while($datosM=mysqli_fetch_array($consultaM)){
    
    
    /*$pdf->MultiCell(60,6,utf8_decode($datosM['Nombre_Mantenimiento']),1,0,'C');
    $pdf->MultiCell(30,6,utf8_decode($datosM['Fecha']),1,0,'C');*/
    
    $pdf->Cell(40,6,utf8_decode($datosM['Fecha']),1,0,'C');
$pdf->MultiCell(80,6,utf8_decode($datosM['Nombre_Mantenimiento']),1,1,'C');
    
}


    /*$pdf->Cell(40,6,'Mantenimiento',1,0,'C',1);
    $pdf->MultiCell(80,6,utf8_decode($mante),1,1,'C'); */

    
	$pdf->Output();
?>