<?php

class Sandwich
{
    /**
     * @var Bread
     */
    private $bread;

    /**
     * @var Cheese
     */
    private $cheese;

    /**
     * @var Butter
     */
    private $butter;

    public function setBread(Bread $bread)
    {
        $this->bread = $bread;
    }

    public function setCheese(Cheese $cheese)
    {
        $this->cheese = $cheese;
    }

    public function setButter(Butter $butter)
    {
        $this->butter = $butter;
    }

    public function create()
    {
        $sandwich = '';
        if ($this->bread) {
            $sandwich .= $this->bread->getPiece() . ' + ';
        }
        if ($this->butter) {
            $sandwich .= $this->butter->getALittle() . ' + ';
        }
        if ($this->cheese) {
            $sandwich .= $this->cheese->getPiece();
        }

        return rtrim($sandwich, " \t\n\r\0\x0B+");
    }
}
