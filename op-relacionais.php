<?php


$num1 = 10;
$num2 = '10';

echo "<pre>";

var_dump($num1);
var_dump($num2);



echo 'Igual == '; 
var_dump($num1 == $num2);
echo 'Diferente != ';
var_dump($num1 != $num2);
echo 'Identico === ';
var_dump($num1 === $num2);
echo 'Não Identico !== ';
var_dump($num1 !== $num2);
echo 'Maior > ';
var_dump($num1 > $num2);
echo 'Menor < ';
var_dump($num1 < $num2);
echo 'Menor ou igual <= ';
var_dump($num1 <= $num2);
echo 'Maior igual >=';
var_dump($num1 >= $num2);

