<?php



$idade = 16;
$temHabilitacao = false;


if ($idade >= 18 && $temHabilitacao){

   echo 'Pode Dirigir';


} else if ( $idade >= 18){

  
  echo 'Não pode dirigir, mas pode tirar a habilitacao';

} else {

	echo 'Não pode dirigir e nem tirar a habilitacao';
}

