<?php

class User
{
    public $name;

    public $age;

    public function __construct()
    {
        $this->name = Storage::get('name');
        $this->age = Storage::get('age');
    }
}