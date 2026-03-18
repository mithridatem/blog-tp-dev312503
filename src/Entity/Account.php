<?php

use Article;

class Account
{
    //Attributs
    private array $articles;

    //Constructeur
    public function __construct()
    {
        $this->articles = [];
    }

    //Getters et Setters
    public function addArticle(Article $article): void {
        $this->articles[] = $article;
    }

    public function removeArticle(Article $article): void {
        unset($this->articles[array_search($article, $this->articles)]);
        sort($this->articles);
    }
}