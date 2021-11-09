<?php

namespace App\src\Repository;

use App\src\Repository\ManagerRepository;

class CommentRepository extends ManagerRepository
{
    public function getComments()
    {
        $sql = 'SELECT * FROM comment';
        $result = $this->createQuery($sql);

        return $result;
    }

    public function getCommentsByArticle($id)
    {
        $sql = 'SELECT * FROM comment WHERE article_id = ?';
        $result = $this->createQuery($sql, [$id]);

        return $result;
    }
}
