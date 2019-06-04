<?php
require ('carpetas/pdf/mpdf.php');

$mpdf = new mPDF('c','A4');

$mpdf->writeHTML('<h3>Hola....</h3>');

$mpdf->Output('asitencia.pdf','I');


?>
