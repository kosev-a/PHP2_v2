<?php

namespace src;

class Comment
{

    public function __construct(
        private int $id,
        private string $authorId,
        private string $postId,
        private string $text
    ) {
    }

    public function __toString()
    {
        return $this->text;
    }
}