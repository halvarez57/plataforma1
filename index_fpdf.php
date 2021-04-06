<?php
require('fpdf.php');

class PDF extends FPDF
{   
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Times','B',11);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(70,10,'Rol de pago Chiquimundi',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    

    $this->Cell(30,10,'Empleado:',0,0,'c',0);
   
    $this->Cell(30,10,'Sueldo base:',0,0,'c',0);
   
    $this->Cell(30,10,'Monto:',0,0,'c',0);
   
    $this->Cell(60,10,'Horas extras:',0,0,'c',0);
    
    $this->Cell(30,10,'Aporte al IIESS:',0,0,'c',0);
   
    $this->Cell(30,10,'Multa por atraso:',0,1,'c',0);
    
}

// Pie de página
function Footer()
{
    
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');

}
}
require("conexion1/conexion1.php");
$consulta="SELECT * FROM rol_pago";

$resultado = $conexion->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Courier','',11);
$pdf->GetY();

while($row =$resultado->fetch_assoc()){
    
    $pdf->Cell(50,10,$row['empleado'],1,0,);
    $pdf->Cell(30,10,$row['sueldo_base'],1,0,'C',0);
    $pdf->Cell(30,10,$row['monto'],1,0,'C',0);
    $pdf->Cell(60,10,$row['horas_extras'],1,0,'C',0);
    $pdf->Cell(30,10,$row['aporte_IIESS'],1,0,'C',0);
    $pdf->Cell(30,10,$row['multa_por_retraso'],1,1,'C',0);
    
}


$pdf->Output();
?>