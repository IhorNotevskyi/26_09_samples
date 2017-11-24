<?php

class Car
{
    use DbConnectionTrait;

    public function drive()
    {
        var_dump($this->getDbConnection());
    }
}
