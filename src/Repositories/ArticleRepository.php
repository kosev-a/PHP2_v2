<?php

namespace Vi\App\Repositories;

use Vi\App\Entities\EntityInterface;
use Vi\App\Entities\Article\Article;
use Vi\App\Exceptions\ArticleNotFoundException;
use PDO;
use PDOStatement;

class ArticleRepository extends EntityRepository implements ArticleRepositoryInterface
{
    /**
     * @param EntityInterface $entity
     * @return void
     */
    public function save(EntityInterface $entity):void
    {
        /**
         * @var Article $entity
         */
        $statement =  $this->connector->getConnection()
            ->prepare("INSERT INTO article (author, title, text) 
                VALUES (:article, :title, :text)");

        $statement->execute(
            [
                ':author' => $entity->getAuthor(),
                ':title' => $entity->getTitle(),
                ':text' => $entity->getText(),
            ]
        );
    }

    /**
     * @throws ArticleNotFoundException
     */
    public function get(int $id): Article
    {
        $statement = $this->connector->getConnection()->prepare(
            'SELECT * FROM article WHERE id = :id'
        );

        $statement->execute([
            ':id' => (string)$id,
        ]);

        return $this->getArticle($statement, $id);
    }

    /**
     * @throws ArticleNotFoundException
     */
    private function getArticle(PDOStatement $statement, int $articleId): Article
    {
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if (false === $result) {
            throw new ArticleNotFoundException(
                sprintf("Cannot find article with id: %s", $articleId));
        }

        return new Article($result['author'], $result['title'], $result['text']);
    }
}