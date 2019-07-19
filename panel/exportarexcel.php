<?php

require_once dirname(__FILE__) . './Classes/PHPExcel/IOFactory.php';
include 'conexion.php';

//error_reporting(E_ALL);
//ini_set('display_errors',true);
$objPHPExcel=new PHPExcel();

$num=$_GET['val'];
$sql="Select * from mantenimiento where No_interno_maquina=".$num;
$sql2="select * from maquinas where No_interno_maquina=".$num;


$resultado= mysqli_query($conecta,$sql);
$resultado2=mysqli_query($conecta,$sql2);

$fila2=9;
$fila=9;
$filename="Mantenimientos.xls";


//$objPHPExcel->getProperties()->setCreator("Cante")->setDescription("Reporte de Mantenimiento");

$objPHPExcel->getProperties()
->setCreator("TI")
->setLastModifiedBy("TI")
->setTitle("Reporte de Mantenimiento")
->setSubject("Reporte de Mantenimiento")
->setDescription("Documento exportado desde PHP")
->setKeywords("Excel Office 2016 openxml php")
->setCategory("Excel listo"); 

//Establecemos la pestaña activa y nombre a la pestaña
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Mantenimiento de Maquina");

$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>13
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
$estiloInformacion = new PHPExcel_Style();
$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));

$objPHPExcel->getActiveSheet()->getStyle('D1:H5')->applyFromArray($estiloTituloReporte);
$objPHPExcel->getActiveSheet()->getStyle('A8:I8')->applyFromArray($estiloTituloColumnas);
//$objPHPExcel->getActiveSheet()->getStyle('B9:D9')->applyFromArray($estiloTituloColumnas);

$objPHPExcel->getActiveSheet()->setCellValue('D3', 'REPORTE DE MANTENIMIENTOS');
$objPHPExcel->getActiveSheet()->mergeCells('D3:G3');


//$objPHPExcel->getActiveSheet()
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
$objPHPExcel->getActiveSheet()->setCellValue('A8','Supervisor');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(16);
$objPHPExcel->getActiveSheet()->setCellValue('B8','Tipo de Maquina');  
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
$objPHPExcel->getActiveSheet()->setCellValue('C8','Marca');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(16);
$objPHPExcel->getActiveSheet()->setCellValue('D8','Modelo');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->setCellValue('E8','No. Serie');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$objPHPExcel->getActiveSheet()->setCellValue('F8','No. Interno');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(17);
$objPHPExcel->getActiveSheet()->setCellValue('G8','No. Mantenimiento');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
$objPHPExcel->getActiveSheet()->setCellValue('H8','Fecha');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(100);
$objPHPExcel->getActiveSheet()->setCellValue('I8','Mantenimiento');

/*$objPHPExcel->getActiveSheet()
->setCellValue('B3','No. Mantenimiento')
->setCellValue('C3','No. Consecutivo')
->setCellValue('D3','Mantenimiento')
->setCellValue('E3','Fecha');
*/

while($row=$resultado->fetch_assoc()){
    
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['id_mantenimiento']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['Descripcion']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['Fecha']);  
    
    $fila++;
    
}
$fila = $fila-1;
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "G9:I".$fila);


while($row2=$resultado2->fetch_assoc()){
    
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila2, $row2['Supervisor']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila2, $row2['Tipo_maquina']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila2, $row2['Marca']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila2, $row2['Modelo']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila2, $row2['No_serie']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila2, $row2['No_interno_maquina']);  
    
    $fila2++;
    
}
$fila2 = $fila2-1;
$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A9:F".$fila2);

mysqli_close($conecta);

$objPHPExcel->setActiveSheetIndex(0);


//$objWriter = new PHPExcel_Writer_Excel2016($objPHPExcel);
//$objWriter->save('php://output');i

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment;filename=$filename");
//header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
$objWriter->save('php://output');
echo '<script> window.location="Mantenimiento.php"</script>';
exit;	

?>
