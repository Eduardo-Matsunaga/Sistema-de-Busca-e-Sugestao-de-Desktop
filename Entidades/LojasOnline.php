<?php

/* V002/24 - versao 07-04-2024 */
require_once "../Interfaces/LojasOnlineInterface.php";

class LojasOnline implements LojasOnlineInterface {
    private $id;
    private $loja;
    private $url;
    private $disponibilidade;

    // Adicionando injeção de dependências através do construtor
    public function __construct($id, $loja, $url, $disponibilidade){
        $this->id = $id;
        $this->loja = $loja;
        $this->url = $url;
        $this->disponibilidade = $disponibilidade;
 
    }    

    // Getters e Setters
    public function SetId(int $id): void {
        $this->id = $id;
    }

    public function GetId(): int {
        return $this->id;
    }

    public function SetLoja(string $loja): void {
        $this->loja = $loja;
    }

    public function GetLoja(): string {
        return $this->loja;
    }

    public function SetUrl(string $url): void {
        $this->url = $url;
    }

    public function GetUrl(): string {
        return $this->url;
    }

    public function SetDisponibilidade(string $disponibilidade): void {
        $this->disponibilidade = $disponibilidade;
    }

    public function GetDisponibilidade(): string {
        return $this->disponibilidade;
    }
   
}