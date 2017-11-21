<?php

class GrandFather
{
    public function __construct()
    {
        echo static::className();
    }

    public function className()
    {
        return self::class;
    }
}

class Father extends GrandFather
{
    public function className()
    {
        return self::class;
    }
}

class Son extends Father
{
    public function className()
    {
        return self::class;
    }
}

$son = new Son();

