<?php


/* V001/24 - versao 02-04-2024 */

require_once('../Entidades/Produto.php');
require_once('../Entidades/Marca.php');
require_once('../Entidades/Preco.php');


// Função para executar os testes
function RodarTestes()
{
    // Criar uma instância de Marca
    $marca = new Marca("Minha Marca");

    // Criar uma instância de Preco
    $preco = new Preco(1, 200.00, "REAL");

    // Criar uma instância de Produto
    $produto = new Produto("Nome do Produto", $marca, "Especificações", $preco, ["Loja1", "Loja2"]);

    // Testar getters
    echo "ID Preço: " . $produto->GetPreco()->GetId() . "\n";
    echo "Preço: " . $produto->GetPreco()->GetPreco() . "\n";
    echo "Moeda: " . $produto->GetPreco()->GetMoeda() . "\n";


    // Testar setters
    $produto->SetNome("Novo Nome teste");
    $produto->GetMarca()->SetNome("Nova Marca teste");
    $produto->GetPreco()->SetId(4);
    $produto->GetPreco()->SetPreco(800.00);
    $produto->GetPreco()->SetMoeda("XingLing");


    // Testar novamente os getters para verificar se os setters funcionaram
    echo "Novo Id: " . $produto->GetPreco()->GetId() . "\n";
    echo "Novo Preço: " . $produto->GetPreco()->GetPreco() . "\n";
    echo "Nova Moeda: " . $produto->GetPreco()->GetMoeda() . "\n";


}

RodarTestes();
