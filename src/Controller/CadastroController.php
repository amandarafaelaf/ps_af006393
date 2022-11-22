<?php

namespace Petshop\Controller;

use Petshop\Core\FrontController;
use Petshop\View\Render;

class CadastroController extends FrontController
{
    public function cadastro()
    {
        $dados = [];
        $dados['titulo'] = 'Faça seu cadastro';
        $dados['topo'] = $this->carregaHTMLTopo();
        $dados['rodape'] = $this->carregaHTMLRodape();
        $dados['formCadastro'] = $this->formCadastro();

        Render::front('cadastro', $dados);
    }

    private function formCadastro()
    {
        $dados = [
            'btn_label'=>'Criar minha conta',
            'btn_class'=>'btn btn-success mt-5',
            'fields'=>[
                ['type'=>'radio-inline', 'class'=>'col-6', 'label'=>'Você é pessoa:', 'name'=>'tipo', 
                    'options'=>[
                        ['label'=>'Física', 'value'=>'F'],
                        ['label'=>'Jurídica', 'value'=>'J']
                    ], 
                    'required'=>true
                ],
                ['type'=>'text', 'class'=>'col-6', 'label'=>'Documento', 'name'=>'cpfcnpj', 'required'=>true],
                ['type'=>'text', 'label'=>'Nome completo', 'name'=>'nome', 'required'=>true],
                ['type'=>'email', 'label'=>'E-mail', 'name'=>'email', 'required'=>true],
                ['type'=>'password', 'label'=>'Crie uma senha', 'name'=>'senha', 'required'=>true],
                ['type'=>'password', 'label'=>'Confirme sua senha', 'name'=>'senha2', 'required'=>true],
            ]
        ];

        return Render::block('form', $dados);
    }
}