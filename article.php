<?php

use App\Models\Article;

@require __DIR__ . '/autoload.php';

$articleID = $_GET['id'] ?? '1';

$article = Article::findById($articleID);

include __DIR__ . '/App/View/templates/article.php';

