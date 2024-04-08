<?php

/* V002/24 - versao 07-04-2024 */
require_once "../Interfaces/LojasOnlineInterface.php";

class LojasOnline {
    private $id;
    private $loja;
    private $url;
    private $disponibilidade;


    // Getters e Setters
    public function SetId($id){
        $this->id = $id;
    }

    public function GetId(){
        return $this->id;
    }

      public function SetLoja($loja){
        $this->loja = $loja;
    }

    public function GetLoja(){
        return $this->loja;
    }

      public function SetUrl($url){
        $this->url = $url;
    }

    public function GetUrl(){
        return $this->url;
    }

    public function SetDisponibilidade($disponibilidade){
        $this->disponibilidade = $disponibilidade;
    }

    public function GetDisponibilidade(){
        return $this->disponibilidade;
    }
   
}