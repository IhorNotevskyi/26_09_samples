<?php

trait DbConnectionTrait
{
    private $dbConnection = null;

    /**
     * @return DB
     */
    private function getDbConnection()
    {
        if (null === $this->dbConnection) {
            $this->dbConnection = new DB();
        }

        return $this->dbConnection;
    }
}