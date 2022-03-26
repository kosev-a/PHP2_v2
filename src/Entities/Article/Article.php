<?php

namespace Vi\App\Entities\Article;

use Vi\App\Entities\User\User;

class Article implements ArticleInterface
{
    public const TABLE_NAME = 'Article';

    public function __construct(
        private int $id,
        private User $author,
        private string $title,
        private string $text,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function __toString(): string
    {
        return sprintf(
            "[%d] %s %s %s",
            $this->getId(),
            $this->getAuthor(),
            $this->getTitle(),
            $this->getText(),
        );
    }

    public function getTableName(): string
    {
        return static::TABLE_NAME;
    }
}