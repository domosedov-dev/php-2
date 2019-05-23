<?php


namespace App;


use PDO;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (require_once __DIR__ . '/../config.php')['db'];
        $this->dbh = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=utf8',
            $config['user'], $config['password']);
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