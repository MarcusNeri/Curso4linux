<?php

$nota = readline('Digite uma nota: ');
$frequencia = readline('Digite sua frequencia');


switch (true) {
   
        case ($nota >=7  && $frequencia >= 8);
	    echo 'Voce esta aprovado'.PHP_EOL;
		break;
	
	
	    case ($nota >= 5 || $frequencia >= 8);
	    echo 'Voce esta de recuperacao'.PHP_EOL;
		break;

	
	    case ($nota < 5 || $frequencia < 8);
	    echo 'Voce esta reprovado'.PHP_EOL;
		break;
		
     
     default:
     break;

}

