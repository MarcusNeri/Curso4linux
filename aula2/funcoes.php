<?php

//function olaMundo(){

// 	 echo 'ola mundo<br>';
// }
// olaMundo();


// olaUsuario(' Marcus');
// olaUsuario();

// echo '<hr>';

// function olaUsuario2($nome = '4linux'){

// 	echo 'Ola' . $nome . '<br>';
// }

// olaUsuario2(' Marcus');
// olaUsuario2();
// echo '<hr>';



function soma(int $num1,int $num2){

   echo $num1 + $num2 . '<br>';

}

soma(5, 4);

echo '<hr>';

// (int $idade) - forca tipagem parametro
// : bool - forca a tipagem retorno

function verificaMaiorIdade(int $idade) : bool{

	if ($idade >= 18){
		return true;
	}

   else{

        return false;

}
         
        // return($idade >= 18) ? true : false;
}
          
          $var = verificaMaiorIdade(23);
          var_dump($var);

 echo '<hr>';

 function negrito(string $txt) : string{

 	return'<strong>' . $txt . '</strong>';
 }
echo negrito('4linux');

 echo '<hr>';

 function italico(){

   //Usando variavel de escopo global
   global $msg;
   echo '<i>' . $msg . '</i>';

 }
 $msg = '4linux - PHP';

 italico();

echo '<hr>';

function adicionar(&$fruta){

 ++$fruta;

}

//adicionar(10);

$laranjas = 5;
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';
adicionar($laranjas);
echo $laranjas . '<br>';
++$laranjas;
echo $laranjas . '<br>';
