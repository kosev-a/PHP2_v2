<?php

namespace Vi\App\Tests\Classes;

use Vi\App\Classes\Argument;
use PHPUnit\Framework\TestCase;
use Vi\App\Exceptions\ArgumentException;

class ArgumentTest extends TestCase
{

    public function testItReturnsArgumentsValueByName(): void
    {
        // Подготовка
        $arguments = new Argument();
        $arguments->add('some_key', 'some_value');
        // Действие
        $value = $arguments->get('some_key');
        // Проверка
        $this->assertEquals('some_value', $value);
    }

    public function testItReturnsValuesAsStrings(): void
    {
        // Создаём объект с числом в качестве значения аргумента
        $arguments = new Argument();
        $arguments->add('some_key', 123);
        $value = $arguments->get('some_key');
        // Проверяем, что число стало строкой
        $this->assertSame('123', $value);
        // Можно также явно проверить,
        // что значение является строкой
        $this->assertIsString($value);
    }
}
