<?php

namespace Vi\App\Entities;

interface EntityInterface
{
    public function getId(): ?int;
    public function __toString(): string;
    public function getTableName():string;
}