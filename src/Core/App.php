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
        // carrega uma sessão ou inicia uma nova em caso de novo acesso
        self::carregaSessao();

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
        self::$router->get('/logout', '\Petshop\Controller\LoginController@logout');
        self::$router->post('/login', '\Petshop\Controller\LoginController@postLogin');
        self::$router->get('/cadastro', '\Petshop\Controller\CadastroController@cadastro');
        self::$router->post('/cadastro', '\Petshop\Controller\CadastroController@postCadastro');
        self::$router->get('/meus-dados', '\Petshop\Controller\MeusDadosController@meusDados');
        self::$router->get('/fale-conosco', '\Petshop\Controller\FaleConoscoController@faleConosco');
        self::$router->post('/fale-conosco', '\Petshop\Controller\FaleConoscoController@postFaleConosco');
    }

    /**
     * Carrega as rotas possíveis que estarão associadas aos controllers para o BACK END
     *
     * @return void
     */
    private static function registraRotasDoBackEnd()
    {

        self::$router->before('GET|POST', '/admin/.*', function() {
            if (empty($_SESSION['usuario'])) {
                redireciona('/admin', 'danger', 'Faça seu logon para continuar');
            }
        });

        self::$router->mount('/admin', function() {
            self::$router->get('/', '\Petshop\Controller\AdminLoginController@login');
            self::$router->post('/', '\Petshop\Controller\AdminLoginController@postLogin');

            self::$router->get('/dashboard', '\Petshop\Controller\AdminDashboardController@index');

            self::$router->get('/clientes', '\Petshop\Controller\AdminClienteController@listar');
            self::$router->get('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@form');
            self::$router->post('/clientes/{valor}', '\Petshop\Controller\AdminClienteController@postForm');

            self::$router->get('/usuarios', '\Petshop\Controller\AdminUsuarioController@listar');
            self::$router->get('/usuarios/{valor}', '\Petshop\Controller\AdminUsuarioController@form');
            self::$router->post('/usuarios/{valor}', '\Petshop\Controller\AdminUsuarioController@postForm');
        });
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

    /**
     * Função que inicia uma nova sessão e, posteriormente, carrega o ID da sessão e grava no dispositivo do usuário
     *
     * @return void
     */
    private static function carregaSessao()
    {
        session_start();
    }
}