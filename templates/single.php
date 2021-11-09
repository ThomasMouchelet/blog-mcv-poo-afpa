<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="?">Retour</a>

    <h1><?= htmlspecialchars($article->getTitle()) ?></h1>
    <p><?= htmlspecialchars($article->getContent()) ?></p>
    <p><?= htmlspecialchars($article->getAuthor()) ?></p>
    <p><?= htmlspecialchars($article->getFormatedDate()) ?></p>

    <?php foreach ($comments as $comment) : ?>
        <hr>
        <div>
            <strong><?= htmlspecialchars($comment->getPseudo()) ?></strong>
            <p><?= htmlspecialchars($comment->getContent()) ?></p>
            <p><?= $comment->getFormatedDate() ?></p>
        </div>
    <?php endforeach ?>
</body>

</html>