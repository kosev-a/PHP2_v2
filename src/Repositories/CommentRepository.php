<?php

namespace App\Repositories;

use App\Entities\EntityInterface;
use App\Entities\Comment\Comment;
use App\Exceptions\CommentNotFoundException;
use PDO;
use PDOStatement;

class CommentRepository extends EntityRepository implements CommentRepositoryInterface
{
    /**
     * @param EntityInterface $entity
     * @return void
     */
    public function save(EntityInterface $entity):void
    {
        /**
         * @var Comment $entity
         */
        $statement =  $this->connector->getConnection()
            ->prepare("INSERT INTO comment (author, article, text) 
                VALUES (:author, :article, :text)");

        $statement->execute(
            [
                ':author' => $entity->getAuthor(),
                ':article' => $entity->getArticle(),
                ':text' => $entity->getText(),
            ]
        );
    }

    /**
     * @throws CommentNotFoundException
     */
    public function get(int $id): Comment
    {
        $statement = $this->connector->getConnection()->prepare(
            'SELECT * FROM comment WHERE id = :id'
        );

        $statement->execute([
            ':id' => (string)$id,
        ]);

        return $this->getComment($statement, $id);
    }

    /**
     * @throws CommentNotFoundException
     */
    private function getComment(PDOStatement $statement, int $commentId): Comment
    {
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if (false === $result) {
            throw new CommentNotFoundException(
                sprintf("Cannot find comment with id: %s", $commentId));
        }

        return new Comment($result['author'], $result['article'], $result['text']);
    }
}