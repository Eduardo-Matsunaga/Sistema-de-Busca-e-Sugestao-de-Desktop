<?php

require_once ('../Entidades/ProdutoFinal.php');
require_once ('../Entidades/Produto.php');
require_once('../Entidades/Marca.php');
require_once('../Entidades/Especificacoes.php');

function RodarTeste ()
{
//Instanciando classes e atribuindo valores
    $marcaBronze = new Marca("Bronze Marca");
    $marcaSilver = new Marca("Silver Marca");
    $marcaGold = new Marca("Gold Marca");

    $especificacoesBronze = new Especificacoes("Bronze especificações");
    $especificacoesSilver = new Especificacoes("Silver especificações");
    $especificacoesGold = new Especificacoes("Gold especificações");

    $produtoBronze = new Produto("Bronze", $marcaBronze, $especificacoesBronze, 100.00, ["Loja1", "Loja2"]);
    $produtoSilver = new Produto("Silver", $marcaSilver, $especificacoesSilver, 200.00, ["Loja3", "Loja4"]);
    $produtoGold = new Produto("Gold", $marcaGold, $especificacoesGold, 300.00, ["Loja5", "Loja6"]);

// Criando array de produtos
    $produtos = [$produtoBronze, $produtoSilver, $produtoGold];

// Criando produto final com os produtos criados
    $produtoFinal = new ProdutoFinal(1, $produtos);

// Testando o produto final
    echo "ID do Produto Final: " . $produtoFinal->getId() . "\n";
    echo "Produtos do Produto Final:\n";
    foreach ($produtoFinal->getProdutos() as $produto) {
        echo "- Nome: " . $produto->GetNome() . ", Marca: " . $produto->GetMarca()->GetNome() . ", Especificações: " . $produto->GetEspecificacoes()->GetDetalhes() . ", Preço: " . $produto->GetPreco() . ", Lojas Online: " . implode(", ", $produto->GetLojasOnline()) . "\n";
        echo "\n"; // Adicionando quebra de linha após cada produto
    }


}

RodarTeste();