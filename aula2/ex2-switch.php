<?php


$num1 = readline('Digite o numero1: ');
$num2 = readline('Digite o numero2: ');
echo '.......' .PHP_EOL;
echo '-1 - Soma-' .PHP_EOL;
echo '-2 - Soma-' .PHP_EOL;
echo '-3 - Mult-' .PHP_EOL;
echo '-4- Divi-' .PHP_EOL;
echo '.......' .PHP_EOL;

$op = readline('OP');
switch ($op) {
    
    case 1:
        $res = $num1 + $num2;
        	
        break;

   case 2:
        $res = $num1 - $num2;
        
        break;


   case 3:
        $res = $num1 * $num2;
        
        break;



   case 4:
        $res = $num1 / $num2;
        
        break;


    default:
        $res = 'Invalido';
        break;
}
   echo 'Resultado: ' . $res . PHP_EOL;