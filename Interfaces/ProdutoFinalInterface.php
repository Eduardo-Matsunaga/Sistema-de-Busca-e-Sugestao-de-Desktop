<?php

require_once "../Entidades/Produto.php";

interface ProdutoFinalInterface {
    public function GetId(): int;
    public function SetId(int $id): void;
    public function GetProdutos(): array;
    public function SetProdutos(array $produtos): void;
    public function AddProduto(Produto $produto): void;
    public function RemoveProduto(Produto $produto): void;
}