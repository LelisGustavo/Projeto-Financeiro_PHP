<?php

class UtilDAO
{

    private static function IniciarSessao()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    // Função para marcar data atual no Realizar Movimento
    public static function DataAtual()
    {
        date_default_timezone_set('America/Sao_Paulo');
        return date('Y-m-d');
    }

    public static function CriarSessao($cod, $nome) 
    {
        self::IniciarSessao();

        $_SESSION['cod'] = $cod;
        $_SESSION['nome'] = $nome;
    }

    public static function CodigoLogado()
    {
       self::IniciarSessao();

       return $_SESSION['cod'];
    }

    public static function NomeLogado()
    {
        self::IniciarSessao();

        return $_SESSION['nome'];
    }

    public static function Deslogar()
    {
        self::IniciarSessao();
        unset($_SESSION['cod']);
        unset($_SESSION['nome']);

        header('location: login.php');
        exit;
    }

    public static function VerificarLogado()
    {
        self::IniciarSessao();

        if(!isset($_SESSION['cod']) || $_SESSION['cod'] =='') {
            header('location: login.php');
        }
    }

}
