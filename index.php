<?php

@require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findAll();

include __DIR__ . '/App/View/templates/index.php';

include __DIR__ . '/App/View/templates/add.php';

