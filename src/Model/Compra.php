<?php

// compras

class Compra
{
    // Cód. Compra, pk, nn, auto
    protected $idcompra;

    // Cód. Compra, pk, nn
    protected $idfornecedor;

    // Valor do Frete, nn
    protected $frete;

    // Valor Total, nn
    protected $total;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}