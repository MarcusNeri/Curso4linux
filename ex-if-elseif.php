<?php
 
$nota = readline("Digite sua nota: ");
$frequencia = readline("Digite sua frequencia: ");

  if ($nota >= 7 && $frequencia >= 8) {

   echo 'Voce esta aprovado' . PHP_EOL;

  } else if ($nota >= 5 && $nota >= 5 && $frequencia >= 8) {


  echo 'Voce esta de recuperacao' . PHP_EOL;


  } else{

  
  echo 'vc esta de reprovado';

  }