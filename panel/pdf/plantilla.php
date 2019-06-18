
<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
            $conecta=mysqli_connect('localhost','root','','kda');
            $sql="select curdate() as Fecha;";
            $consulta=mysqli_query($conecta,$sql);
            
            while($fechaConsulta=mysqli_fetch_array($consulta)){
            $fecha=$fechaConsulta['Fecha'];    
            }
            
            
            
			$this->SetFont('Arial','B',15);
			$this->Cell(17);
			$this->Cell(120,10,'Reporte General de Mantenimiento',0,1,'L');
            $this->Ln(10);
            $this->SetFont('Arial','I',12);
            /*$this->Cell(50);
            $this->Cell(120,10, utf8_decode($fecha),0,1,'L');*/
			$this->Ln(1);
		}
		
		/*function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}*/		
	}
?>