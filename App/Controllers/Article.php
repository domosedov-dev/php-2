<?php


namespace App\Controllers;


use App\Controller;

class Article extends Controller
{
//    protected function access(): bool
//    {
//        return false;
//    }

    protected function handle()
    {

        $this->view->article = \App\Models\Article::findById($_GET['id']);

        $this->view->display(__DIR__ . '/../View/templates/article.php');
    }


}