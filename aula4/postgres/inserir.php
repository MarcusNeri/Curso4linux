<?php


require 'conexao.php';

/* nome
   email
   senha
*/

$nome = 'Ronald';
$email = 'ronald@cavs.com';
$senha = '075315';

$query = "INSERT INTO usuarios(nome,email,senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

echo'<pre>';
echo $query;
echo '<br>';

$result = pg_query($con,$query);
   if($result){
   	echo 'OK<br>';

   }else{
   	echo 'Erro ao inserir';
   }
