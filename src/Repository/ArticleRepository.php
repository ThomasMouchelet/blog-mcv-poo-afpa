<?php

namespace App\src\Repository;

use App\src\Entity\Article;
use App\src\Repository\ManagerRepository;

class ArticleRepository extends ManagerRepository
{

    public function buildObject($row)
    {
        $article = new Article();
        $article
            ->setId($row->id)
            ->setTitle($row->title)
            ->setContent($row->content)
            ->setAuthor($row->author)
            ->setCreatedAt($row->createdAt);
        return $article;
    }

    public function getArticles()
    {
        $result = $this->createQuery('SELECT * FROM article');
        $articles = [];

        foreach ($result as $articleResult) {
            $article = $this->buildObject($articleResult);
            array_push($articles, $article);
        }

        return $articles;
    }

    public function getArticle(int $id)
    {
        $sql = 'SELECT * FROM article WHERE id = ?';
        $result = $this->createQuery($sql, [$id]);
        $articleResult = $result->fetch();
        $article = $this->buildObject($articleResult);

        return $article;
    }

    public function addArticle($articlePost)
    {
        extract($articlePost);
        $sql = 'INSERT INTO article (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$title, $content, $author]);
    }
}
