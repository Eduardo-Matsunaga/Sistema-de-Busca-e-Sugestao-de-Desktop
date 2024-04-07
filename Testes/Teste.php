<?php

/* V001/24 - versao 02-04-2024 */

require_once('../Entidades/Produto.php');
require_once('../Entidades/Marca.php');
require_once('../Entidades/Especificacoes.php');



// Função para executar os testes
function RodarTestes() {
    // Criando instâncias
    $marca = new Marca("Minha Marca");
    $especificacoes = new Especificacoes("Minhas especificacoes");
    $produto = new Produto("Nome do Produto", $marca, $especificacoes, 100.00, ["Loja1", "Loja2"]);

    // Testar getters de Produto
    echo "Nome do Produto: " . $produto->GetNome() . "\n";
    echo "Marca: " . $produto->GetMarca()->GetNome() . "\n";
    echo "Especificações: " . $produto->GetEspecificacoes()->GetDetalhes() . "\n";
    echo "Preço: " . $produto->GetPreco() . "\n";

    // Testar setters de Produto
    $produto->SetNome("Novo Nome teste");
    $produto->GetMarca()->SetNome("Nova Marca teste");
    $produto->GetEspecificacoes()->SetDetalhes("Nova especificações");
    $produto->SetPreco(250.00);
    $produto->SetLojasOnline(["Nova Loja1", "Nova Loja2"]);

    // Testar novamente os getters para verificar se os setters funcionaram
    echo "Novo Nome do Produto: " . $produto->GetNome() . "\n";
    echo "Nova Marca: " . $produto->GetMarca()->GetNome() . "\n";
    echo "Especificações: " . $produto->GetEspecificacoes()->GetDetalhes() . "\n";
    echo "Novo Preço: " . $produto->GetPreco() . "\n";



}

RodarTestes();
