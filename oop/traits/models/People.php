<?php

namespace models;

use components\ApiConnectionTrait;
use components\DbConnectionTrait;
use interfaces\WalkableInterface;

class People implements WalkableInterface
{
    use DbConnectionTrait, ApiConnectionTrait {
        ApiConnectionTrait::getConnection insteadof DbConnectionTrait;
        DbConnectionTrait::getConnection as getDbConnection;
    }

    public function walk()
    {
        var_dump($this->getConnection());
        var_dump($this->getDbConnection());
    }
}