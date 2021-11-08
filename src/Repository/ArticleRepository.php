<?php

namespace App\src\Repository;

use App\src\Repository\ManagerRepository;

class ArticleRepository extends ManagerRepository
{ 
    public function getArticles(){
        $result = $this->createQuery('SELECT * FROM article');
        return $result;
    }
}
