<?php

namespace Petshop\Core;

class DB
{
    /**
     * variável estática que armazenará a conexão ao banco de dados
     * num objeto PDO
     *
     * @var \PDO
     */
    private static $db;

    /**
     * Retorna uma instância de conexão ao banco de dados 
     * reusa se já houver uma estabelecida
     *
     * @return \PDO
     */
    public static function getInstance() : \PDO
    {
        if (is_null(self::$db)) {
            try {
                $dsn = sprintf('mysql:dbname=%s;host=%s', DB_SCHEMA, DB_HOST);
                self::$db = new \PDO($dsn, DB_USER, DB_PASSWORD);
            } catch(\PDOException $e) {
                error_log($e->getMessage() );
                throw new Exception('Falha ao realizar a conexão com o servidor, tente novamente mais tarde');
            }   
        }
        return self::$db;
    }

    /**
     * Método estático que retorna o resultado de uma consulta SQL
     * preparada ou não. Retorna um vetor de dados (PDO::FETCH_ASSOCH)
     *
     * @param string $sql Consulta preparada com ou sem parâmetros
     * @param array $params Parâmetros opcionais
     * @return array
     */
    public static function select(string $sql, array $params=[]) : array
    {
        try {
            $st = self::getInstance()->prepare($sql);
            if (!$st) {
                error_log('Erro ao preparar a consulta: ' . $sql);
                throw new Exception('Falha ao preparar comando SQL');
            }
            if (!$st->execute($params)) {
                error_log('Erro ao executar o comando sql: ' . $sql . ' - ' . var_export($params, true));
                throw new Exception('Falha ao preparar comando SQL');
            }
            return $st->fetchAll(\PDO::FETCH_ASSOC);
        } catch(\PDOException $e) {
            error_log('Erro PDO: ' . $e->getMessage() . ' - Linha: ' . $e->getLine());
            throw new Exception('Falha ao realizar consulta no banco de dados');
        }
        return [];
    }

    /**
     * Método estático que retorna um Statement de uma execução SQL no banco de dados
     *
     * @param string $sql Comando SQL (insert/update/delete) preparado
     * @param array $params Parâmetros/valores referentes à consulta
     * @return \PDOStatement
     */
    public static function query(string $sql, array $params=[]) : \PDOStatement
    {
        try {
            $st = self::getInstance()->prepare($sql);
            if (!$st) {
                error_log('Erro ao preparar a consulta: ' . $sql);
                throw new Exception('Falha ao preparar comando SQL');
            }
            if (!$st->execute($params)) {
                error_log('Erro ao executar o comando sql: ' . $sql . ' - ' . var_export($params, true));
                throw new Exception('Falha ao preparar comando SQL');
            }
            return $st;
        } catch(\PDOException $e) {
            error_log('Erro PDO: ' . $e->getMessage() . ' - Linha: ' . $e->getLine());
            throw new Exception('Falha ao executar no banco de dados');
        }
    }
}

