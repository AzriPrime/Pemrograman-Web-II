<?php

$celcius = 37.841;

$fahrenheit = (9/5 * $celcius) + 32;

$reamur = (4/5 * $celcius);

$kelvin = $celcius + 273.15;


echo "Input: Celcius = $celcius\n";
echo "\n";
echo "Output:\n";
echo "Fahrenheit (F) = " . number_format($fahrenheit, 4, ',', '') . "\n";
echo "Reamur (R)     = " . number_format($reamur, 4, ',', '') . "\n";
echo "Kelvin (K)     = " . number_format($kelvin, 3, ',', '');