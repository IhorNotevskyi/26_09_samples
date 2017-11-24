<?php

/**
 * Class Test
 * @property string $qwerty
 * @property string $master
 *
 * @method getMaster
 * @method getQwerty
 */
class Test
{
    public $string;

    private $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
    }

    public function __call($name, $arguments)
    {
        foreach ($this->attributes as $attribute => $value) {
            $method = 'get' . ucfirst($attribute);
            if ($name == $method) {
                return $value;
            }
        }

        return null;
    }

    public function __toString()
    {
        return serialize($this);
    }
}
