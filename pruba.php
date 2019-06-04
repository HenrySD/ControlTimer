<?php
// la funcion creada mas abajo puede dar el intervalo de dos horas
$datos=calcularIntervaloHora('07:00:00','12:00:00');
echo "Horas: ".$datos[3];
echo "</br>";
echo "Minutos: ".$datos[4];
echo "</br>";
$datos1=calcularIntervaloHora('08:30:00','11:00:00');
echo "Horas: ".$datos1[3];
echo "</br>";
echo "Minutos: ".$datos1[4];

echo "</br>";



function calcularIntervaloHora($horaEntrada,$horaSalida){
    $datetime1 = date_create($horaEntrada);
    $datetime2 = date_create($horaSalida);
    $interval = date_diff($datetime1, $datetime2);
   $tiempo=array();
    foreach($interval as $valor){
        $tiempo[]=$valor;
    }
return $tiempo;
}



?>