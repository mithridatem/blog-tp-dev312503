<?php

use Date;

class Article
{
    //Attributs
    private int $id;
    private string $title;
    private string $description;
    private Date $createdAt;
    private string $image;
    private ?Category $category;

    //Constructeur
    public function __construct() {}

    //Getters et Setters
    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getCreatedAt(): Date {
        return $this->createdAt;
    }

    public function setCreatedAt(Date $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }

    public function getCategory(): ?Category {
        return $this->category;
    }

    public function setCategory(?Category $category): void {
        $this->category = $category;
    }
}
