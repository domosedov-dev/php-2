<?php


namespace App;


class Config
{
    private static $_instance = null;

    private static $host = '';
    private static $dbname = '';
    private static $user = '';
    private static $password = '';

    public $data = [];

    public function __construct()
    {
        $this->data['db'] = ['host' => $this->host, 'dbname' => $this->dbname, 'charset' => $this->]
    }
}