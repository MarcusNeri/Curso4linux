<?php

require 'conexao.php';

/* nome
   email
   senha
*/

$nome = 'ronaldo';
$email = 'ronaldo@cavs.com';
$senha = '075315';
$id = 5;

$query = "UPDATE usuarios SET nome='{$nome}', email='{$email}' , senha='{$senha}'
WHERE id='{$id}'";

echo'<pre>';
echo $query;
echo '<br>';


$result = pg_query($con,$query);
if($result){
	echo'OK<br>';
}else{
	echo 'Erro ao editar';
}