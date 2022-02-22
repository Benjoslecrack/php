<?php

abstract class Model{

    // attribut

    private static $pdo; // accessible par toutes les classes qui vont hériter de celle-ci comme musiquemanager par exemple

    // méthodes

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=store2;charset=utf8","root","root");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd()
    {
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}