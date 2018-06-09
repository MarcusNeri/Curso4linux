<?php

require 'conexao.php';

/* nome
   email
   senha
*/

$nome = 'Gustavo';
$email = 'gustavohenrique@cavs.com';
$senha = '023';
$id = 3;

$query = "UPDATE usuarios SET nome='{$nome}', email='{$email}' , senha='{$senha}'
WHERE id='{$id}'";

echo'<pre>';
echo $query;
echo '<br>';


$result = mysqli_query($con,$query);
if($result){
	echo'OK<br>';
}else{
	echo 'Erro ao editar';
}