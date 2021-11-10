<?php

namespace App\src\Repository;

use App\src\Entity\Comment;
use App\src\Repository\ManagerRepository;

class CommentRepository extends ManagerRepository
{

    public function buildObject($row)
    {
        $comment = new Comment();
        $comment
            ->setId($row->id)
            ->setPseudo($row->pseudo)
            ->setContent($row->content)
            ->setCreatedAt($row->createdAt)
            ->setArticle_id($row->article_id);

        return $comment;
    }

    public function getComments()
    {
        $sql = 'SELECT * FROM comment';
        $result = $this->createQuery($sql);
        $comments = [];

        foreach ($result as $commentResult) {
            $comment = $this->buildObject($commentResult);
            array_push($comments, $comment);
        }

        return $comments;
    }

    public function getCommentsByArticle($id)
    {
        $sql = 'SELECT * FROM comment WHERE article_id = ?';
        $result = $this->createQuery($sql, [$id]);
        $comments = [];

        foreach ($result as $commentResult) {
            $comment = $this->buildObject($commentResult);
            array_push($comments, $comment);
        }

        return $comments;
    }

    public function addComment($commentPost)
    {
        extract($commentPost);
        $sql = 'INSERT INTO comment (pseudo, content, article_id, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$pseudo, $content, $article_id]);
    }
}
