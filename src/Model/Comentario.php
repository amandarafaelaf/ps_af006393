<?php

// comentarios

class Comentario
{
    // Cód. Comentário, pk, nn, auto
    protected $idcomentario;

    // Cód. Produto, nn,
    protected $idproduto;

    // Cód. Cliente, nn,
    protected $idcliente;

    // Tipo, nn
    protected $tipo;

    // Descrição, nn
    protected $descricao;

    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}