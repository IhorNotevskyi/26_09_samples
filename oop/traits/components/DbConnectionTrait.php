<?php

namespace components;

trait DbConnectionTrait
{
    private $dbConnection = null;

    /**
     * @return DB
     */
    private function getConnection()
    {
        if (null === $this->dbConnection) {
            $this->dbConnection = new DB();
        }

        return $this->dbConnection;
    }
}