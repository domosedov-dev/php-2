<?php

@require __DIR__ . '/autoload.php';

use App\Models\Article;

$id = $_GET['id'] ?? null;

$article = new Article();

$article->id = $id;

$article->delete();

header('Location: /index.php');
