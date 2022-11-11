<?php

namespace Petshop\View;

use Exception;

class Render
{
    /**
     * Método que carrega uma página com a estrutura do FrontEnd, recebe dois parâmetros:
     *
     * @param string $pagina Nome do arquivo a ser impresso
     * @param array $dados Dados a serem inseridos na página
     * @return void
     */
    static public function front(string $pagina, array $dados=[])
    {
        // monta o caminho do local onde a página solicitada está
        $pathPagina = TFRONTEND . 'pages/' . $pagina . 'php';

        if (!file_exists($pathPagina)) {
            error_log('Página template não localizada em: '.$pathPagina);
            throw new Exception("A página solicitada '{$pagina}' não foi localizada");
        }

        if (empty($dados['titulo'])) {
            $dados['titulo'] = FRONTEND_TITLE;
        } else {
            $dados['titulo'] = $dados['titulo'] . ' - ' . FRONTEND_TITLE;
        }
        extract($dados); // transforma os índices do vetor em variáveis

        require_once TFRONTEND . 'common/top.php';
        require_once $pathPagina;
        require_once TFRONTEND . 'common/bottom.php';
    }
}