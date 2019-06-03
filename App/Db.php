<?php


namespace App;


use PDO;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::getInstance();
        $dsn = $config->getConfig()['db'];
        $this->dbh = new PDO('mysql:host=' . $dsn['host'] . ';dbname=' . $dsn['dbname'] . ';charset=utf8',
            $dsn['user'], $dsn['password']);
    }

    public function query($sql, $params = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}