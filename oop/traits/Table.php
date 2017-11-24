<?php

class Table
{
    use DbConnectionTrait;

    public function doNothing()
    {
        var_dump($this->getDbConnection());
    }
}