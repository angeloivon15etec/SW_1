<?php

define("PI", 3.141592);

$raio = 5;

$area = 4 * PI * pow($raio, 2);

$volume = (4/3) * PI * pow($raio, 3);

echo "Raio da esfera: $raio ";
echo "Área da esfera: " . number_format($area, 2, ',', '.');
echo "Volume da esfera: " . number_format($volume, 2, ',', '.');
?>