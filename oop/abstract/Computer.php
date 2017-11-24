<?php

abstract class Computer
{
    const VOLUME = '220V';

    abstract public function turnOn();

    public function keyPress()
    {
        return 'Pressed some button';
    }

    final public function calculate($a, $b)
    {
        return $a + $b;
    }
}
