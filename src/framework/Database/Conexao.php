<?php

namespace Code\framework\Database;

class Conexao
{

    static private $conexao;

    private function __construct()
    {

    }
    public static function conectar()
    {
        if(!self::$conexao)
        {
            // criação do PDO com a nova conexão
            self::$conexao = new \PDO(
                DB_TIPO. ':dbname='. DB_HOST. ';host='. DB_NOME. ';charset='. DB_CHARSET,
                DB_USUARIO,
                DB_SENHA
                );
                self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$conexao->exec('SET NAMES '. DB_CHARSET . 'collate '. DB_COLLATE);
        }

        }

        return self::$conexao;

        $pdo = new \PDO('mysql:host=localhost;dbname=teste;charset=utf8', 'root', '');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}