<?php

// carrinhosprodutos

class CarrinhoProduto
{
    // Cód. Produto, pk, nn
    protected $idproduto;

    // Cód. Carrinho, pk, nn
    protected $idcarrinho;

    // Preço, nn
    protected $preco;

    // Quantidade, nn
    protected $quantidade;

    // Dt. Criação, nn, auto
    protected $created_at;
}