<?php

namespace Vi\App\Entities\User;

use Vi\App\Entities\EntityInterface;

interface UserInterface extends EntityInterface
{
    public function getFirstName(): string;
    public function getLastName(): string;

}