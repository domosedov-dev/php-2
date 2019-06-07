<?php include __DIR__. '/header.php'; ?>
    <h1>Add Article</h1>
    <form action="add.php" method="post">
        <input type="text" name="title">
        <input type="text" name="content">
        <button type="submit">Add!</button>
    </form>
    <h1>News</h1>
<?php
    foreach ($this->articles as $article) { ?>
        <article>
            <a href="<?='/article.php?id=' . $article->id; ?>"><h2><?=$article->title; ?></h2></a>
            <p><?=$article->content; ?></p>
            <a href="<?='/edit.php?id=' . $article->id; ?>">Редактировать</a>
            <a href="<?='/delete.php?id=' . $article->id; ?>">Удалить</a>
        </article>
    <?php } ?>

<?php include __DIR__ . '/footer.php'; ?>