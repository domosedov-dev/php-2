<?php

use App\Models\Author;

@require __DIR__ . '/autoload.php';

$author = Author::findAll();

var_dump($author);

$article = \App\Models\Article::findById('1');

var_dump($article->author);
var_dump($article);
