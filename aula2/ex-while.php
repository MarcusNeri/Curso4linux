<?php

$num = 0;



while($num <= 20){

	echo $num. PHP_EOL;
    $num++;
}


echo '........................'.PHP_EOL;


$num = 0;

while($num <= 20){
	
	if($num % 2==0 ){


		echo $num.PHP_EOL;
	}
    $num++;

}

echo'...............' .PHP_EOL;



$num = 0;

while($num <= 20){
	
	if($num % 2!=0 ){


		echo $num.PHP_EOL;
	}
    $num++;

}

echo'...............' .PHP_EOL;

$num = 0;

while($num <= 20){
	//Multiplo de 5 quando resto da divisao por 5 é 0;
	
	if($num % 5==0 ){


		echo $num.PHP_EOL;
	}
    $num++;

}