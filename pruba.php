<?php
require('carpetas/pdf/fpdf.php');
require('database.php');
$conexion=conexion();
$sql="SELECT
tab_asis.Cod_Usua AS ID,
tab_usua.Nom_Usua AS Nombre,
tab_usua.Ape_Usua As Apellido,
tab_asis.Reg_Entr AS Entrada,
tab_asis.Reg_Salida AS Salida,
tab_asis.Fec_Regi AS Fecha,
TIMEDIFF(Reg_Salida, Reg_Entr) AS 'Duracion'

FROM
tab_asis
INNER JOIN tab_usua ON tab_asis.Cod_Usua = tab_usua.Cod_Usua
WHERE
tab_asis.Cod_Usua= '$id' AND Fec_Regi BETWEEN '$i' AND '$f'";


$fecha=date("H:i");
class myPDF extends FPDF{
    function header(){
        
        $this->SetFont('Arial','B',14);
        $this->Cell(200,10,'Reporte de asistencia',0,0,'C');
        $this->Ln();
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');

    }
    function headerTable(){
        
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'ID',1,0,'C');
        $this->Cell(40,10,'Fechas',1,0,'C');
        $this->Cell(40,10,'Hora Entrada',1,0,'C');
        $this->Cell(40,10,'Hora Salida',1,0,'C');
        $this->Cell(40,10,'Duracion',1,0,'C');
        $this->Ln();
    }
    function bodyTable(){

        
    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();
$pdf->Output();

?>