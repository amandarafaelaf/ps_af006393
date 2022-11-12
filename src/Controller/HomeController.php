<?php

namespace Petshop\Controller;

use Petshop\Model\Estado;
use Petshop\View\Render;

class HomeController
{
    public function index()
    {
        $objEstado = new Estado;
        $estados = $objEstado->find();

        $dados = [];
        $dados['titulo'] = 'Lista de Estados';
        $dados['estados'] = $estados;
        Render::front('home', $dados);
    }
}