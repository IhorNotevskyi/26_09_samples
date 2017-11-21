<?php

class Tvorog extends Cheese
{
    protected $name = 'Tvorog';

    public function getPiece()
    {
        return "a gorka of {$this->name}";
    }
}
