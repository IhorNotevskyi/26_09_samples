<?php

namespace models;

use components\ConnectionTrait;

class Car
{
    use ConnectionTrait;

    public function drive()
    {
        var_dump($this->getDbConnection(), $this->getApiConnection());
    }
}
