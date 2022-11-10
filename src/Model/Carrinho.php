<?php

// carrinhos

class carrinhos
{
    // Cód. Carrinho, pk, nn, auto
    private $idcarrinho;

    // Cód. Cliente, pk, nn
    private $idcliente;

    // Valor Total, nn
    private $valortotal;

    // Encerrado, nn
    private $encerrado;

    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}