<?php


require_once "../Interfaces/EstoqueInterface.php";
class Estoque implements EstoqueInterface {
    private $id;
    private $lojasOnline;
    private $disponibilidade;
    private $nome;
    
    //Métodos 
    public function __construct(int $id, array $lojasOnline, bool $disponibilidade, string $nome) {
        $this->id = $id;
        $this->lojasOnline = $lojasOnline;
        $this->disponibilidade = $disponibilidade;
        $this->nome = $nome;
    }
    
    
    public function GetId(): int {
        return $this->id;
    }
    
    public function SetId(int $id): void {
        $this->id = $id;
    }
    
    public function GetLojasOnline(): array {
        return $this->lojasOnline;
    }
    
    public function SetLojasOnline(array $lojasOnline): void {
        $this->lojasOnline = $lojasOnline;
    }
    
    public function GetDisponibilidade(): bool {
        return $this->disponibilidade;
    }
    
    public function SetDisponibilidade(bool $disponibilidade): void {
        $this->disponibilidade = $disponibilidade;
    }
    
    public function GetNome(): string {
        return $this->nome;
    }
    
    public function SetNome(string $nome): void {
        $this->nome = $nome;
    }
}


