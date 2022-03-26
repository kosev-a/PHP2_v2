<?php

namespace Vi\App\Entities\Article;

use Vi\App\Entities\EntityInterface;
use Vi\App\Entities\User\User;

interface ArticleInterface extends EntityInterface
{
    public function getAuthor(): User;
    public function getTitle(): string;
    public function getText(): string;
}