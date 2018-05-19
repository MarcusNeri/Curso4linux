<?php

//HEREDOC

$nome = 'Marcus';

$frase = <<< TXT

  Meu nome é {$nome} e eu tenho 23 anos,
  trabalho como desenvolvedor e instrutor PHP.

TXT;

echo $frase;