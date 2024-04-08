<?php

/* V002/24 - versao 07-04-2024 */

require_once('../Entidades/Produto.php');
require_once('../Entidades/Marca.php');
require_once('../Entidades/LojasOnline.php');


// Função para executar os testes
function RodarTestes() {
    // Criar uma instância de Marca
    $marca = new marca("Minha Marca");

    // Criar uma instância de Produto
    $produto = new produto("Nome do Produto", $marca, "Especificações", "Avaliações", 100.00, ["Loja1", "Loja2"]);

    // Testar getters
    echo "Nome do Produto: " . $produto->GetNome() . "\n";
    echo "Marca: " . $produto->GetMarca()->GetNome() . "\n";
    echo "Preço: " . $produto->GetPreco() . "\n";

    // Testar setters
    $produto->SetNome("Novo Nome teste");
    $produto->GetMarca()->SetNome("Nova Marca teste");
    $produto->SetPreco(250.00);


    // Testar novamente os getters para verificar se os setters funcionaram
    echo "Novo Nome do Produto: " . $produto->GetNome() . "\n";
    echo "Nova Marca: " . $produto->GetMarca()->GetNome() . "\n";
    echo "Novo Preço: " . $produto->GetPreco() . "\n";


    // Testar os getters para loja Online
    echo "Lojas Online:\n";
    foreach ($produto->GetLojasOnline() as $loja) {
        echo "- $loja\n";
    }


    // Testar setters para lojas online
    $produto->SetLojasOnline(["Nova Loja1", "Nova Loja2"]);


    // Testar novamente os getters para Lojas Online para verificar se os setters funcionaram
    echo "\nLojas Online Atualizadas:\n";
    foreach ($produto->GetLojasOnline() as $loja) {
        echo "- $loja\n";
    }


}

RodarTestes();
