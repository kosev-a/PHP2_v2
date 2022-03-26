<?php

namespace Vi\App\Repositories;

use Vi\App\Entities\EntityInterface;

interface EntityRepositoryInterface
{
    public function get(int $id): EntityInterface;
}