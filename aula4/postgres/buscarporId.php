<?php

require 'conexao.php';

$id = 5;

$query = "SELECT * FROM usuarios WHERE id={$id}";

//echo'<pre>';
//echo $query;
//echo '<br>';

$result = pg_query($con,$query);
$data = pg_fetch_assoc($result);

//print_r($data);

?>


    <p><?=$data['nome'] ?></p>
    <p><?=$data['email'] ?></p>
    <p><?=$data['senha'] ?></p>

<?php else: ?>
	<p>Nao encontrou dados</p>
<?php endif;?>
   