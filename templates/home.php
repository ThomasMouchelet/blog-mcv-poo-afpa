<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($articles as $article) : ?>
        <div>
            <a href="?route=single&id=<?= htmlspecialchars($article->getId()) ?>">
                <h2><?= htmlspecialchars($article->getTitle()) ?></h2>
            </a>
            <p><?= htmlspecialchars($article->getContent()) ?></p>
            <p><?= htmlspecialchars($article->getAuthor()) ?></p>
            <p><?= htmlspecialchars($article->getCreatedAt()) ?></p>
        </div>
    <?php endforeach ?>

</body>

</html>