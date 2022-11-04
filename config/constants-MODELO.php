<?php

/**
 * DEFINIÇÕES GLOBAIS DO PROJETO
 */

 define('FRONTEND_TITLE', 'Bicho Novo: Seu Petshop Animal');
 define('BACKEND_TITLE', 'Bicho Novo');
 define('TIMEZONE', 'America/Sao_Paulo');
 define('DISPLAY_ERRORS', 1);
 define('PATH_PROJETO', __DIR__ . '/../');

 /**
  * DEFINIÇÕES DE PATH DE ARQUIVOS
  */

  define('URL', 'http://localhost');
  define('TEMPLATES', PATH_PROJETO . 'templates/');
  define('TBACKEND', TEMPLATES . 'backend/');
  define('TFRONTEND', TEMPLATES . 'frontend/');

  /**
   * DEFINIÇÕES DO BANCO DE DADOS
   */

  define('DB_HOST',     'localhost');
  define('DB_SCHEMA',   'ps_af006393');
  define('DB_USER',     'root');
  define('DB_PASSWORD', '');

/**
 * DEFINIÇÕES DE ENVIO DE E-MAIL
 */

 define('MAIL_HOST', 'smtp.gmail.com');
 define('MAIL_PORT', 587);
 define('MAIL_NAME', 'Bicho Novo PetShop');
 define('MAIL_USER', '');
 define('MAIL_PASS', '');