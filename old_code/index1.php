<?php

//$mi_nivel_actual = 36;
$mi_nivel_actual = 49;

//$fecha1 = new DateTime('2021-3-29 16:34');//fecha inicial
$fecha1 = new DateTime(gmDate("Y-m-d H:i"));//fecha inicial
$fecha2 = new DateTime('2021-4-22 5:00');//fecha de cierre

echo "<br>";

//$fecha2 = new DateTime('2021-4-21 6:00');//fecha de cierre
$intervalo = $fecha1->diff($fecha2);
echo "Tiempo restante : " . $intervalo->format('%d days %H horas %i minutos');

echo "<br>";
echo "<br>";

//niveles restantes
$nivel_maximo = 100;
$niveles_restantes = ($nivel_maximo - $mi_nivel_actual);
echo "Nivel actual : " . $mi_nivel_actual;

echo "<br>";
echo "<br>";

echo "Nivel por dia : " . $niveles_restantes / ($intervalo->format('%d')+($intervalo->format('%H')/24));
echo "<br>";
echo "Nivel por hora : " . $niveles_restantes / ($intervalo->format('%d')*24+$intervalo->format('%H'));
echo "<br>";
echo "Nivel por minuto : " . $niveles_restantes / ($intervalo->format('%d')*1440+$intervalo->format('%H')*60+$intervalo->format('%i'));
echo "<br>";
