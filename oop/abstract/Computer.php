<?php

abstract class Computer
{
    const VOLUME = '220V';

    abstract public function turnOn();

    public function keyPress()
    {
        return 'Pressed some button';
    }
}
