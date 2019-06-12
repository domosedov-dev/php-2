<?php

@require __DIR__ . '/autoload.php';

$data = \App\Models\Author::findByName('Alex')->id;

var_dump($data);