<?php

class Category
{
    //Attributs
    private int $id;
    private string $categoryName;

    //Constructeur
    public function __construct(string $name) {
        $this->categoryName = $name;
    }

    //Getters et Setters
    public function getId():int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getCategoryName(): string {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): void {
        $this->categoryName = $categoryName;
    }
}

$test = new Category("test");
$media = new Category("media");
$news = new Category("news");

//Afficher
echo $test->getCategoryName() . "<br>";

//Modifier
$test->setCategoryName("nouveau");

