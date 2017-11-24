<?php

interface PortableInterface
{
    const MAX_WEIGHT = '20kg';

    public function pickUp();

    public function putDown();
}
