<?php

require_once "../Interfaces/PrecoInterface.php";

class Preco implements PrecoInterface
{
    private $id;
    private $preco;
    private $moeda;


    public function __construct($id, $preco, $moeda){
        $this->id = $id;
        $this->preco = $preco;
        $this->moeda = $moeda;
    }


    public function SetId(int $id) :void {
        $this->id = $id;
    }

    public function GetId() :int{
        return $this->id;
    }

    public function SetPreco(float $preco) :void{
        $this->preco = $preco;
    }

    public function GetPreco() :float{
        return $this->preco;
    }

    public function SetMoeda(string $moeda) :void{
        $this->moeda = $moeda;
    }

    public function GetMoeda() :string{
        return $this->moeda;
    }
}