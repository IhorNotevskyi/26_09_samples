<?php

class People
{
    use DbConnectionTrait;

    public function walk()
    {
        var_dump($this->getDbConnection());
    }
}