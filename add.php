<?php

use App\Models\Article;

@require __DIR__ . '/autoload.php';

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['author'])){

    $article = new Article();
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->author = $_POST['author'];
    $article->save();

    header('Location: /index.php');
} else {
    header('Location: /index.php');
}