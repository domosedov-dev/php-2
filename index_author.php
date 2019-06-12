<?php

use App\Models\Author;

@require __DIR__ . '/autoload.php';

$authors = Author::findAll();

var_dump($authors);


