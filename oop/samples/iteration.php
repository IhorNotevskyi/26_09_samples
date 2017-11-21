<?php

class Test
{
    public $a = 1;
    public $b = 2;
    protected $c = 3;
    protected $d = 4;
    private $e = 5;
    private $f = 6;

    public function iterate()
    {
        foreach ($this as $key => $value) {
            var_dump($key . ' => ' . $value);
        }
    }
}

$test = new Test();
$test->iterate();
