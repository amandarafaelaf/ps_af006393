<?php

// descontos

class Desconto
{
    // Cód. Desconto, pk, nn, auto
    protected $iddesconto;

    // Código
    protected $codigo;

    // Data Inicio
    protected $dataini;

    // Data Final
    protected $datafim;

    // Percentual de Desconto
    protected $percentual;
    
    // Dt. Criação, nn, auto
    protected $created_at;

    // Dt. Alteração, nn, auto
    protected $updated_at;
}