<?php

namespace models;

use components\DbConnectionTrait;

class Table
{
    use DbConnectionTrait;

    public function doNothing()
    {
        var_dump($this->getConnection());
    }
}