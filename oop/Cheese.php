<?php

abstract class Cheese
{
    protected $name;

    public function getPiece()
    {
        return "a piece of {$this->name} cheese";
    }
}
