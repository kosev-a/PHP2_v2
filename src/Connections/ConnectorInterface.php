<?php

namespace Vi\App\Connections;

use Vi\App\Drivers\Connection;

interface ConnectorInterface
{
    public function getConnection(): Connection;
}