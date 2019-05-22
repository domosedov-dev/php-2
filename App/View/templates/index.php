<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
    <h1>News</h1>
<?php
    foreach ($news as $article) { ?>
        <article>
            <a href="<?='/article.php?id=' . $article->id; ?>"><h2><?=$article->title; ?></h2></a>
            <p><?=$article->content; ?></p>
        </article>
    <?php } ?>

</body>
</html>