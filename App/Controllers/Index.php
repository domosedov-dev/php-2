<?php


namespace App\Controllers;


use App\Controller;
use App\Models\Article;

class Index extends Controller
{

    protected function handle()
    {
        /* 
        * Здесь идет обращение к методам из трейта Magic,
        * который в массив data с ключем 'articles' передают данные Article::findAll()
        * Затем уже в шаблоне мы можем обратиться к data, c помощью $this->articles,
        * что по сути является $this->data['articles'];
        */
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../View/templates/news.php');
    }
}
