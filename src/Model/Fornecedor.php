<?php

// fornecedores

class Fornecedor
{
    // Cód. Fornecedor, pk, nn, auto
    protected $idfornecedor;

    // Razão Social, nn
    protected $razaosocial;

    // Nome Fantasia, nn
    protected $nomefantasia;

    // Telefone 01, nn
    protected $telefone1;

    // Telefone 02
    protected $telefone2;

    // E-mail, nn
    protected $email;

    // Contato
    protected $contato;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}