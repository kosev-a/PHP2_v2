<?php

namespace Vi\App\Drivers;

interface Connection
{
    public function executeQuery(string $query, array $params);
}