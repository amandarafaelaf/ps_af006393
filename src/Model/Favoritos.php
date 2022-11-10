<?php

// favoritos

class Favorito
{
    // Cód. Favorito, pk, nn, auto
    protected $idfavorito;

    // Cód. Produto, nn
    protected $idproduto;

    // Cód. Cliente, nn
    protected $idcliente;

    // Ativo, nn
    protected $ativo;

    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}