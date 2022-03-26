<?php

namespace Vi\App\Classes;

class Argument implements ArgumentInterface
{
    private array $arguments = [];

    public function add(string $key, string $value):void
    {
        $this->arguments[$key] = $value;
    }

    public function get(string $argument): ?string
    {
        $value = $this->arguments[$argument];
        return $value;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }
}