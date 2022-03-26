<?php

namespace Vi\App\Repositories;

use Vi\App\Connections\ConnectorInterface;
use Vi\App\Drivers\Connection;
use Vi\App\Entities\EntityInterface;

abstract class EntityRepository implements EntityRepositoryInterface
{
    protected Connection $connection;

    public function __construct(ConnectorInterface $connector)
    {
        $this->connection = $connector->getConnection();
    }

    abstract public function get(int  $id): EntityInterface;
}