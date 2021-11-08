<?php

class ArticleRepository
{
    public function getConnection(){

    }

    public function getArticles(){
        try {
            $database = new PDO("mysql:host=localhost;dbname=blog-mvc-poo", "root", "root");
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $result = $database->prepare('SELECT * FROM article');
        $result->setFetchMode(PDO::FETCH_CLASS, static::class);
        $result->execute();
        return $result;
    }
}
