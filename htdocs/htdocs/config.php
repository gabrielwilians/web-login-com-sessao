<?php
    session_start();
    const host = 'sql300.epizy.com';
    const dbname = 'epiz_28607648_usuarios';
    const user = 'epiz_28607648';
    const senha = 'HkuyBM4qKzfd';

    try {
        $pdo = new PDO('mysql:host='.host.';dbname='.dbname.'', user, senha, [PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'"]);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Vai mostrar erros caso exista.
    }catch (Exception $e) { /*Pegue a exception e coloque na variável $e */
        echo 'Erro ao conectar ao banco de dados';
        echo $e;
    }
?>
