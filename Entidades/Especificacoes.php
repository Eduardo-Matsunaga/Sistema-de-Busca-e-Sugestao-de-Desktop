<?php

require_once "../Interfaces/EspecificacoesInterface.php";
class Especificacoes implements EspecificacoesInterface{
    private $detalhes;

    public function __construct($detalhes){
        $this->detalhes= $detalhes;
    }

    public function GetDetalhes(): string{
        return $this->detalhes;
    }
    public function SetDetalhes(string $detalhes): void{
        $this-> detalhes = $detalhes;
    }

}
