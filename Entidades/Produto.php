<?php

/* V001/24 - versao 02-04-2024 */

require_once('Marca.php');
require_once('Preco.php');


class Produto {
    private $nome;
    private $marca;
    private $especificacoes;
    private $preco;
    private $lojasOnline;

    // Adicionando injeção de dependências através do construtor
    public function __construct(string $nome, MarcaInterface $marca, string $especificacoes, PrecoInterface $preco, array $lojasOnline) {
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

    public function GetEspecificacoes(): string {
        return $this->especificacoes;
    }

    public function SetEspecificacoes( string $especificacoes): void {
        $this->especificacoes = $especificacoes;
    }

    public function GetPreco(): PrecoInterface {
        return $this->preco;
    }

    public function SetPreco( PrecoInterface $preco): void {
        $this->preco = $preco;
    }

    public function GetLojasOnline(): array {
        return $this->lojasOnline;
    }

    public function SetLojasOnline(array $lojasOnline): void {
        $this->lojasOnline = $lojasOnline;
    }
}
