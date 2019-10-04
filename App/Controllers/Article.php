<?php


namespace App\Controllers;


use App\Controller;

class Article extends Controller
{
    // Функция вызывается автоматически из Cotroller
    protected function handle()
    {
        // Get data
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        // Передаем данные в шаблон и рендерим
        $this->view->display(__DIR__ . '/../View/templates/article.php');
    }
}