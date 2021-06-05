<?php

class Banco
{

    private static $dbNome = 'epiz_28756198_banco';
    private static $dbHost = 'sql209.epizy.com';
    private static $dbUsuario = 'epiz_28756198';
    private static $dbSenha = 'icS0R7p7Rysd';

    private static $cont = null;

    public function __construct()
    {
        die('A função Init nao é permitido!');
    }

    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha);
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }

    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
