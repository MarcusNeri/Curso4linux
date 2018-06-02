<?php


echo '<pre>';

$funcao = function ($nome){

	echo 'Func anonimo - ' . $nome;
};

//var_dump($funcao);

$funcao('Marcus');

echo '<br>';

$funcao = 'Outra coisa';

var_dump($funcao);

echo '<hr>';

$nomes = ['Marcus' , '4linux' , 'Sarah', 'Irving'];

function encontraSarah($nome){

      if($nome == 'Sarah'){
          return $nome;


      }

}


$encontrado = array_filter($nomes, 'encontraSarah');
print_r($encontrado);

echo '<hr>';


$encontrado = array_filter($nomes, 
	function($nome){
    if ($nome == '4linux'){
    	return $nome;
    }
    
    


});

print_r($encontrado);