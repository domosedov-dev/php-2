<?php


namespace App\Models;


use App\Db;
use App\Model;

class Author extends Model
{
    public const TABLE = 'authors';

    public $name;

    public static function findByName($name)
    {
        $db = new Db();

        $data =  $db->query('SELECT * FROM ' . static::TABLE . ' WHERE name=:name', ['name' => $name], static::class);

        return $data ? $data[0] : null;
    }

}