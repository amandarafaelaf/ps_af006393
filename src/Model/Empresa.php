<?php

// empresas

class Empresa
{
    // Cód. Empresa, pk, nn, auto
    protected $idempresa;

    // Nome Fantasia, nn
    protected $nomefantasia;

    // Razão Social, nn
    protected $razaosocial;

    // Tipo, nn
    protected $tipo;

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

    // Telefone 01, nn
    protected $telefone1;

    // Telefone 02
    protected $telefone2;

    // Site
    protected $site;

    // Email, nn
    protected $email;

    // CNPJ, nn
    protected $cnpj;

    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}