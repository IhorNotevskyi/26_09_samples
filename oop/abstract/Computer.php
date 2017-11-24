<?php

abstract class Computer
{
    abstract public function turnOn();

    public function keyPress()
    {
        return 'Pressed some button';
    }
}
