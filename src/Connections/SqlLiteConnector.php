<?php

namespace Vi\App\Connections;

use Vi\App\config\SqlLiteConfig;

class SqlLiteConnector extends Connector implements SqlLiteConnectorInterface
{
    public function getDsn(): string
    {
        return SqlLiteConfig::DSN;
    }

    public function getUserName(): string
    {
       return '';
    }

    public function getPassword(): string
    {
        return '';
    }

    public function getOptions(): array
    {
        return [];
    }
}