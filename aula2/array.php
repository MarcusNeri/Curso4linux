<?php

echo '<pre>';
//array

//[0] = valor
//[1] = valor

//$arr = ['valor1' , 'valor2']; 
//$arr = array('string' , true, 1,2.3);
//$arr[] = 'string';
//$arr[3]= 123;
//$arr[3]= 456;
$arr = ['Marcus', 23, 'marcus.neri@megaisencoes.com.br'];
//echo $arr; nao funciona

print_r($arr); //funciona
//var_dump($arr); // funciona

echo $arr[0] . '<br>';
echo $arr[1] . '<br>';
echo $arr[2] . '<br>';

echo '<hr>';

for ($i=0; $i < 3; $i++){

     echo $arr[$i] . '<br>';

}

echo '<hr>';

for ($i=0; $i < 4; $i++){

     echo $arr[$i] . '<br>';

 }

 //array associativo
echo '<hr>';
 $pessoa = [
 'nome' => 'Marcus' , 
 // [0] = marcus
 'idade' => 23 ,
 //[1] = 23
 'email' => 'marcus.neri@megaisencoes.com.br' ,
 //[2] = marcus.neri@...
 'altura'=> 1.80
 //[3] = 1.80
 ];

 print_r($pessoa);


 echo '<hr>';

echo $pessoa['nome'] . '<br>';
echo $pessoa['idade'] . '<br>';
echo $pessoa['email'] . '<br>';
echo $pessoa['altura'] . '<br>';
