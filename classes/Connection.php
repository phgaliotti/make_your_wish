<?php


class Connection {

    public static $instance;

    private function Connection() { }

    public static function getInstance() {

        if (!isset(self::$instance)) {
    //self::$instance = new PDO('mysql:host=projetoxdev.mysql.bdaas.com.br;dbname=projetoxdev;charset=utf8', 'projetoxdev', 'projetox123');
            self::$instance = new PDO('mysql:dbname=pecaja;host=localhost;port=21;charset=utf8', 'root', 'abc123');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}