<?php


namespace App;


class Config
{
    private static $_instance = null;

    private $config = [
        'db' => [
            'host' => 'localhost',
            'dbname' => 'php2',
            'user' => 'root',
            'password' => ''
        ]
    ];

    public static function getInstance()
    {
        if(self::$_instance === null){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

    public function getConfig()
    {
        return $this->config;
    }
}