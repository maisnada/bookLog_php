<?php

use BoockLog\Models\Atividade;

require_once __DIR__.'/src/Models/Atividade.php';

$atividade = new Atividade(NULL, 'Teste', new \DateTime(), new \DateTime());

echo $atividade.PHP_EOL;
