<?php

use Petshop\Model\Dica;

require_once __DIR__ . '/../vendor/autoload.php';

$dica = new Dica();
$dica->titulos = 'Teste';
echo $dica->titulo;