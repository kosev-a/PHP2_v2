<?php

namespace src;

class Post
{

    public function __construct(
        private int $id,
        private string $authorId,
        private string $header,
        private string $text
    ) {
    }

    public function __toString()
    {
        return $this->header . PHP_EOL . $this->text;
    }
}