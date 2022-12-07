<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Produto;
use Petshop\View\Render;

class ProdutoController extends FrontController
{
    public function mostrarProduto($idProduto)
    {
        $dados =[];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $produto = new Produto;
        if (!$produto->loadById($idProduto)) {
            redireciona('/', 'warning', 'Produto não localizado');
        }

        $dados['produto'] = $produto->find(['idproduto='=>$idProduto])[0];
        $dados['imagens'] = $produto->getFiles();

        Render::front('produtos', $dados);
    }
}