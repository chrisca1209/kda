<?php

require_once dirname(__FILE__) . './Classes/PHPExcel/IOFactory.php';
include 'conexion.php';

//error_reporting(E_ALL);
//ini_set('display_errors',true);
$objPHPExcel=new PHPExcel();

$num=$_GET['val'];
$sql="Select * from mantenimiento where No_Inter_Maquina=".$num;
$sql2="select * from maquinas where No_Inter_Maquina=".$num;


$resultado= mysqli_query($conecta,$sql);
$resultado2=mysqli_query($conecta,$sql2);

$fila2=2;
$fila=6;
$filename="Mantenimientos.xls";


//$objPHPExcel->getProperties()->setCreator("Cante")->setDescription("Reporte de Mantenimiento");

$objPHPExcel->getProperties()
->setCreator("Cante")
->setLastModifiedBy("Cante")
->setTitle("Documento Excel de Prueba")
->setSubject("Documento Excel de Prueba")
->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
->setKeywords("Excel Office 2016 openxml php")
->setCategory("Pruebas de Excel"); 

$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->setTitle("Mantenimientos");

$objPHPExcel->getActiveSheet()
->setCellValue('B1','Supervisor')
->setCellValue('C1','Tipo de Maquina')
->setCellValue('D1','Marca')
->setCellValue('E1','Modelo')
->setCellValue('F1','No. Serie')
->setCellValue('G1','No. Interno')
->setCellValue('B5','No. Mantenimiento')
->setCellValue('C5','No. Consecutivo')
->setCellValue('D5','Mantenimiento')
->setCellValue('E5','Fecha');

/*$objPHPExcel->getActiveSheet()
->setCellValue('B3','No. Mantenimiento')
->setCellValue('C3','No. Consecutivo')
->setCellValue('D3','Mantenimiento')
->setCellValue('E3','Fecha');
*/

while($row=$resultado->fetch_assoc()){
    
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['ID_Mante']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['No_Inter_Maquina']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['Nombre_Mantenimiento']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['Fecha']);
    
    $fila++;
    
}

while($row2=$resultado2->fetch_assoc()){
    
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila2, $row2['Supervisor']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila2, $row2['Tipo_Maquina']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila2, $row2['Marca']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila2, $row2['Modelo']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila2, $row2['No_Serie']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila2, $row2['No_Inter_Maquina']);
    
    $fila2++;
    
}

mysqli_close($conecta);

$objPHPExcel->setActiveSheetIndex(0);


//$objWriter = new PHPExcel_Writer_Excel2016($objPHPExcel);
//$objWriter->save('php://output');i

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment;filename=$filename");
//header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
exit;


?>
