<?php


namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findById($id)
    {
        $db = new Db();

        return $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', ['id' => $id], static::class);
    }

    public static function findLast($count)
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count,
            [],
            static::class);
    }

    public static function findAll()
    {
        $db = new Db();

        return $db->query('SELECT * FROM ' . static::TABLE, [], static::class);
    }
}