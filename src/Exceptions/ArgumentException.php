<?php

namespace Vi\App\Exceptions;

class ArgumentException extends \Exception
{
    public function expectExceptionMessage(): string
    {
        return ("No such argument: some_key");
    }
}