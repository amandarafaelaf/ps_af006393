<?php

namespace Petshop\Core;

use Bramus\Router\Router;
use Petshop\Controller\ErrorController;
use Petshop\View\Render;

class App
{
    /**
     * Variável estática que conterá o objeto Router responsável pelo tratamento das rotas
     *
     * @var Router
     */
    private static $router;

    /**
     * Método que será carregado quando alguma página do site for invocada,
     * decide qual a rota deve ser executada a partir da URL informada pelo usuário
     *
     * @return void
     */
    public static function start()
    {
        // associa um objeto Bramus\Router à variável $router
        self::$router = new Router();

        // registra as rotas possíveis
        self::registaRotasDoFrontEnd();
        self::registraRotasDoBackEnd();
        self::registra404Generico();

        // analisa a requisicção e escolhe a rota compatível
        self::$router->run();
    }

    /**
     * Carrega as rotas possíveis que estarão associadas aos controllers para o FRONT END
     *
     * @return void
     */
    private static function registaRotasDoFrontEnd() 
    {
        self::$router->get('/', '\Petshop\Controller\HomeController@index');
        self::$router->get('/login', '\Petshop\Controller\LoginController@login');
    }

    /**
     * Carrega as rotas possíveis que estarão associadas aos controllers para o BACK END
     *
     * @return void
     */
    private static function registraRotasDoBackEnd()
    {

    }

    /**
     * Carrega rota genérica para erro de URL digitada
     *
     * @return void
     */
    private static function registra404Generico()
    {
        self::$router->set404(function() {
            header('HTTP/1.1 404 Not Found');
            $objErro = new ErrorController();
            $objErro->erro404();
        });
    }
}