<?php


namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findById($id)
    {
        $db = new Db();

        $data =  $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id=:id', ['id' => $id], static::class);

        return $data ? $data[0] : null;
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

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];

        $data = [];

        foreach ($fields as $name => $value) {
            if($name == 'id') {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . '(' . implode(',', $cols) . ') VALUES (' . implode(',', array_keys($data)) . ')';

        $db = new Db();

        $db->execute($sql, $data);

        $this->id = $db->getLastId();
    }

    public function update()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        $binds = [];

        foreach ($fields as $name => $value) {
            if($name == 'id') {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        foreach ($cols as $key){
            $binds[] = $key . '=:' . $key;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' .  implode(',', $binds) . ' WHERE id=' . $this->id;

        $db = new Db();

        $db->execute($sql, $data);
    }

    public function save()
    {
        if(empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        $data['id'] = $this->id;

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        $db = new Db();

        $db->execute($sql, $data);
    }
}