<?php

@require __DIR__ . '/autoload.php';

//$article = new \App\Models\Article();
//$article->title = ' Example Article Title';
//$article->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolore ex ipsam non odio porro possimus praesentium,
//    tempora vero vitae!';
//
////$article->insert();
//
//var_dump($article);

$config = \App\Config::getInstance();
$dsn = $config->getConfig();
