<?php

namespace Vi\App\Tests;

use PHPUnit\Framework\TestCase;
use PDO;
use PDOStatement;
use Vi\App\Repositories\ArticleRepository;
use Vi\App\Entities\Article\Article;
use Vi\App\Entities\User\User;

class ArticleTest extends TestCase 
{
    public function testItSaveArticleToRepository(): void
    {
        $connectionStub = $this->createStub(PDO::class);
        $statementMock = $this->createMock(PDOStatement::class);
        $statementMock
            ->expects($this->once())
            ->method('execute')
            ->with([
                ':id' => 11,
                ':first_name' => 'Ivan',
                ':lastName' => 'Ivanov',
                ':email' => 'mail@mail.ru',
                ':title' => 'Title',
                ':text' => 'Text'
            ]);
        $connectionStub->method('prepare')->willReturn($statementMock);
        $repository = new ArticleRepository($connectionStub);
        $repository->save(
            new Article (11, new User('Ivan', 'Ivanov', 'mail@mail.ru'), 'Title', 'Text')
        );
    }
}