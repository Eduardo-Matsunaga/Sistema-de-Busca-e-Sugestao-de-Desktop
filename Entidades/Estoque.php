<?php

class Estoque {
    private $id;
    private $lojasOnline = array();
    private $disponibilidade;
    private $nome;
    
    //Métodos 
    public function __construct($id, $lojasOnline, $disponibilidade, $nome) {
        $this->id = $id;
        $this->lojasOnline = $lojasOnline;
        $this->disponibilidade = $disponibilidade;
        $this->nome = $nome;
    }
    
    
    public function GetId() {
        return $this->id;
    }
    
    public function SetId($id) {
        $this->id = $id;
    }
    
    public function GetLojasOnline() {
        return $this->lojasOnline;
    }
    
    public function SetLojasOnline($lojasOnline) {
        $this->lojasOnline = $lojasOnline;
    }
    
    public function GetDisponibilidade() {
        return $this->disponibilidade;
    }
    
    public function SetDisponibilidade($disponibilidade) {
        $this->disponibilidade = $disponibilidade;
    }
    
    public function GetNome() {
        return $this->nome;
    }
    
    public function SetNome($nome) {
        $this->nome = $nome;
    }
}


