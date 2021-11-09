<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php while ($article = $articles->fetch()) : ?>
        <div>
            <a href="?route=single&id=<?= htmlspecialchars($article->id) ?>">
                <h2><?= htmlspecialchars($article->title) ?></h2>
            </a>
            <p><?= htmlspecialchars($article->content) ?></p>
            <p><?= htmlspecialchars($article->author) ?></p>
            <p><?= htmlspecialchars($article->createdAt) ?></p>
        </div>
    <?php endwhile ?>

</body>

</html>