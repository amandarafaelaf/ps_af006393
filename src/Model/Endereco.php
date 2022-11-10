<?php

// enderecos

class Endereco
{
    // Cód. Endereço, pk, nn, auto
    protected $idendereco;

    // Cód. Cliente, nn
    protected $idcliente;

    // CEP, nn
    protected $cep;

    // Cidade, nn
    protected $cidade;

    // Estado, nn
    protected $estado;

    // Rua
    protected $rua;

    // Bairro
    protected $bairro;

    // Número
    protected $numero;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}