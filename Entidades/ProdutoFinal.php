<?php

require_once "Produto.php";
require_once "../Interfaces/ProdutoFinalInterface.php";

class ProdutoFinal implements ProdutoFinalInterface {
    private $id;
    private $produtos;

    public function __construct(int $id, array $produtos) {
        $this->id = $id;
        $this->produtos = $produtos;
    }

    public function GetId(): int {
        return $this->id;
    }

    public function SetId(int $id): void {
        $this->id = $id;
    }

    public function GetProdutos(): array {
        return $this->produtos;
    }

    public function SetProdutos(array $produtos): void {
        $this->produtos = $produtos;
    }

    public function AddProduto(Produto $produto): void {
        $this->produtos[] = $produto;
    }

    public function RemoveProduto(Produto $produto): void {
        $index = array_search($produto, $this->produtos, true);
        if ($index !== false) {
            unset($this->produtos[$index]);
        }
    }
}