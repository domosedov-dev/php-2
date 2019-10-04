<?php

namespace App\Models;

use App\Model;
class Article extends Model
{
    public const TABLE = 'news';
    public $title;
    public $content;
    public $author_id;

    public function __get($name)
    {
        if($name === 'author') {
            if(!empty($this->author_id)) {
                return Author::findById($this->author_id);
            } else {
                return '';
            }
        }
    }

    public function __set($name, $value)
    {
        if($name === 'author') {

            if(Author::findByName($value) !== null) {
                $this->author_id = Author::findByName($value)->id;
            } else {
                $newAuthor = new Author();
                $newAuthor->name = $value;
                $newAuthor->save();
                $this->author_id = Author::findByName($value)->id;
            }
        }
    }
}

