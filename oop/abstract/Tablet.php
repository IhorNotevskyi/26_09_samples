<?php

class Tablet extends Computer implements TouchableInterface, PortableInterface
{
    public function turnOn()
    {
        return $this->touchTheScreen(1, 3) . $this->touchTheScreen(2, 4);
    }

    public function touchTheScreen($coordinateX, $coordinateY)
    {
        return "Touched {$coordinateX} - {$coordinateY}";
    }

    public function pickUp()
    {
        return 'Tablet was picked up';
    }

    public function putDown()
    {
        return 'Tablet was put down';
    }
}