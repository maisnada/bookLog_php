<?php

namespace BoockLog\Models;

use DateTime;

class Atividade{

    private ?int $id;
    private string $nome;
    private \DateTime $inicio;
    private ?\DateTime $fim;

    public function __construct(?int $id, string $nome, \DateTime $inicio, ?\DateTime $fim){

        $this->id = $id;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
        
        $this->inicio->setTimezone(new \DateTimeZone('America/Sao_Paulo'));

        $this->fim->setTimezone(new \DateTimeZone('America/Sao_Paulo'));

        $this->fim->modify('+2 day');

    }

    public function getId():?int{

        return $this->id;
    }

    public function getNome():string{

        return $this->nome;
    }

    public function getInicio():\DateTime{

        return $this->inicio;
    }

    public function getFim():\DateTime{

        return $this->fim;
    }

    public function __toString():string
    {
        return "Atividade: {$this->nome} Início: {$this->inicio->format('d/m/Y H\h:i')} Fim: {$this->fim->format('d/m/Y H\h:i')}";
    }
}

//https://www.alura.com.br/artigos/manipulando-datas-e-horarios-com-php?srsltid=AfmBOorHph5aaelS8PlxpQfDHRNse5h-XGHCpMaVRCncAw_tBYPXQCj0#para-saber-mais:-%60datetimeimmutable%60