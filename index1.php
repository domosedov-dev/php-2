<?php

use App\Models\Article;

@require __DIR__ . '/autoload.php';

$news = Article::findLast('5');

include __DIR__ . '/App/View/templates/news.php';





