<?php

/* V001/24 - versao 02-04-2024 */

require_once "../Interfaces/MarcaInterface.php";
class Marca implements MarcaInterface {
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function GetNome(): string{
        return $this->nome;
    }
    public function SetNome(string $nome): void{
        $this-> nome = $nome;
    }
}
