<?php

// avaliacoes

class Avaliacao
{
    // Cód. Avaliação, nn, pk, auto
    protected $idavaliacao;

    // Cód. Produto, nn
    protected $idproduto;

    // Cód. Cliente, nn
    protected $idcliente;

    // Nota, nn
    protected $nota;

    //Comentário
    protected $comentario;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;

}