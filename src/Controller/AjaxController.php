<?php
namespace Petshop\Controller;

class AjaxController
{
    /**
     * Função que recebe as ações solicitadas e escolhe o método que deve ser executado
     *
     * @return void
     */
    public function loader()
    {
        if (empty($_POST['acao'])) {
            $this->retorno('error', 'Ação não definida, contate o suporte');
        }

        if (!method_exists($this, $_POST['acao'])) {
            $this->retorno('error', 'Ação não impelentada, contate o suporte');
        }

        $acao = $_POST['acao'];
        $this->$acao($_POST);
    }

    /**
     * Retorna o objeto JSON para o cliente
     *
     * @param string $status error, info, warning, question
     * @param string $mensagem
     * @param array $dados
     * @return void
     */
    public function retorno(string $status, string $mensagem, array $dados=[])
    {
        $resposta = [
            'status'=>$status,
            'mensagem'=>$mensagem,
            'dados'=>$dados
        ];

        header('Content-type: application/json; charset=utf-8');
        die(json_encode($resposta));
    }

    public function curtir($dados)
    {
        $this->retorno('success', 'tudo certo', $dados);
    }
}