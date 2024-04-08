<?php

/* V001/24 - versao 02-04-2024 */

require_once('Marca.php');
require_once('Estoque.php');


class Produto {

    private $id;
    private $nome;
    private $marca;
    private $especificacoes;
    private $estoque;
    private $preco;
    private $lojasOnline;

    // Adicionando injeção de dependências através do construtor
    public function __construct(int $id, string $nome, MarcaInterface $marca, EstoqueInterface $estoque, string $especificacoes, float $preco, array $lojasOnline) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->especificacoes = $especificacoes;
        $this->preco = $preco;
        $this->lojasOnline = $lojasOnline;

    }

    // Getters e Setters
    public function GetNome(): string  {
        return $this->nome;
    }

    public function SetNome(string $nome): void {
        $this->nome = $nome;
    }

    public function GetMarca(): MarcaInterface {
        return $this->marca;
    }

    public function SetMarca(MarcaInterface $marca): void {
        $this->marca = $marca;
    }

    public function GetEstoque(): EstoqueInterface {
        return $this->estoque;
    }

    public function SetEstoque(EstoqueInterface $estoque): void {
        $this->estoque = $estoque;
    }

    public function GetEspecificacoes(): string {
        return $this->especificacoes;
    }

    public function SetEspecificacoes( string $especificacoes): void {
        $this->especificacoes = $especificacoes;
    }

    public function GetAvaliacoes(): string {
        return $this->avaliacoes;
    }

    public function SetAvaliacoes(string $avaliacoes): void {
        $this->avaliacoes = $avaliacoes;
    }

    public function GetPreco(): float {
        return $this->preco;
    }

    public function SetPreco( float $preco): void {
        $this->preco = $preco;
    }

    public function GetLojasOnline(): array {
        return $this->lojasOnline;
    }

    public function SetLojasOnline(array $lojasOnline): void {
        $this->lojasOnline = $lojasOnline;
    }

    public function GetId(): float {
        return $this->id;
    }

    public function SetId(int $id): void {
        $this->id = $id;
    }
}
