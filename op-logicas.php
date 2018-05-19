<?php

echo '<pre>';

echo 'Operador AND && <br>' ;
echo 'true and true ';
var_dump(True and True);
echo 'true and False ';
var_dump(True && False);
echo 'False and True ';
var_dump(False && True);
echo 'False and False ';
var_dump(False && False);

echo '<hr>';

echo 'Operador OR || <br>' ;
echo 'true or true ';
var_dump(True || True);
echo 'true or False ';
var_dump(True || False);
echo 'False or True ';
var_dump(False || True);
echo 'False or False ';
var_dump(False || False);

echo '<hr>' ;

echo 'Operador XOR || <br>' ;
echo 'true XOR true ';
var_dump(True XOR True);
echo 'true XOR False ';
var_dump(True XOR False);
echo 'False XOR True ';
var_dump(False XOR True);
echo 'False XOR False ';
var_dump(False XOR False);

echo '<hr>' ;

echo 'Operador de Negacao ! <br>' ;
echo '!false ';
var_dump(!false);
echo ' !true ';
var_dump(!true);
