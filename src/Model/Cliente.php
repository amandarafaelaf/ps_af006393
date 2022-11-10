<?php

// clientes

class Cliente
{
    // Cód. Cliente, pk, nn, auto
    protected $idcliente;

    // Tipo, nn
    protected $tipo;

    // CPF / CNPJ, nn
    protected $cpfcnpj;

    // Nome, nn
    protected $nome;

    // Email, nn
    protected $email;

    // Senha, nn
    protected $senha;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}