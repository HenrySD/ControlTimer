<?php
require('carpetas/pdf/fpdf.php');

class myPDF extends FPDF{
    function header(){
        $this->Image('carpetas/img/remodelaciones.jpg',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Reporte de asistencia',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,70,'Final calle Bernado Perdomo',0,0,'C');
        $this->Ln();

    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');

    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->Output();

?>