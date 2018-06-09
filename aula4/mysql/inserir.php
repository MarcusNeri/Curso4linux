<?php

require 'conexao.php';

/* nome
   email
   senha
*/

$nome = 'Juca';
$email = 'juca@cavs.com';
$senha = '075315';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

echo'<pre>';
echo $query;
echo '<br>';

$result = mysqli_query($con,$query);
   if($result){
   	echo 'OK<br>';

   }else{
   	echo 'Erro ao inserir';
   }
