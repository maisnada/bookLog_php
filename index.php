<?php

use BoockLog\Models\Atividade;

require_once __DIR__.'/src/Models/Atividade.php';

$atividade = new Atividade(NULL, 'Teste', new \DateTime(), new \DateTime());

//var_dump($atividade);

//echo $atividade->getInicio()->format('d/m/Y H\hi');

echo $atividade.PHP_EOL;

$intervalo = $atividade->getfim()->diff($atividade->getInicio());

print_r($intervalo);

echo $intervalo->d;