<?php

require 'conexao.php';

$id = 7;

$query = "SELECT * FROM usuarios WHERE id={$id}";

//echo'<pre>';
//echo $query;
//echo '<br>';

$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);

//print_r($data);

?>


    <p><?=$data['nome'] ?></p>
    <p><?=$data['email'] ?></p>
    <p><?=$data['senha'] ?></p>
   

 
 




