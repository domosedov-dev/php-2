<?php include __DIR__. '/header.php'; ?>
    <h1>Add Article</h1>
    <form action="add.php" method="post">
        <label>Заголовок</label><input type="text" name="title" required><br>
        <label>Текст</label><input type="text" name="content" required><br>
        <label>Автор</label><input type="text" name="author" required><br>
        <button type="submit">Add!</button>
    </form>
    <h1>News</h1>
<?php
    foreach ($this->articles as $article) { ?>
        <article>
            <a href="<?='?ctrl=Article&id=' . $article->id; ?>"><h2><?=$article->title; ?></h2></a>
            <p>Автор: <?= $article->author->name; ?></p>
            <p><?=$article->content; ?></p>
            <a href="<?='/edit.php?id=' . $article->id; ?>">Редактировать</a>
            <a href="<?='/delete.php?id=' . $article->id; ?>">Удалить</a>
        </article>
    <?php } ?>

<?php include __DIR__ . '/footer.php'; ?>