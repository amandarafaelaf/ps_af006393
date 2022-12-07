<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\Model\Categoria;
use Petshop\View\Render;

class CategoriaController extends FrontController
{
    public function lista($idCategoria)
    {
        $dados = [];
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();

        $categoria = new Categoria;
        if (!$categoria->loadById($idCategoria)) {
            redireciona('/', 'warning', 'Categoria não localizada');
        }

        $categoriasLocalizadas = $categoria->find(['idcategoria='=>$idCategoria]);
        $dados['categoria'] = $categoriasLocalizadas[0];
        $dados['categoria']['imagens'] = $categoria->getFiles();

        

        Render::front('categorias', $dados);
    }
}