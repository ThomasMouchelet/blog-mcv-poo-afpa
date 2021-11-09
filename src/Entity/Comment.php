<?php

namespace App\src\Entity;

class Comment
{
    private $id;
    private $pseudo;
    private $content;
    private $createdAt;
    private $article_id;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of article_id
     */
    public function getArticle_id()
    {
        return $this->article_id;
    }

    /**
     * Set the value of article_id
     *
     * @return  self
     */
    public function setArticle_id($article_id)
    {
        $this->article_id = $article_id;

        return $this;
    }

    public function getFormatedDate()
    {
        return date("d/m/Y H:i:s", strtotime($this->createdAt));
    }
}
