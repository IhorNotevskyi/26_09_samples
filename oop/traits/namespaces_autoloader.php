<?php

class Autoload
{
    /**
     * @var array
     */
    private $map = [];

    public function __construct(array $map = [])
    {
        $this->map = $map;
    }

    public function load($class)
    {
        $ds = DIRECTORY_SEPARATOR;

        foreach ($this->map as $alias => $namespace) {
            if (substr($class, 0, strlen($alias)) == $alias) {
                $class = str_replace($alias, $namespace, $class);
                break;
            }
        }

        $file = __DIR__ . $ds . str_replace('\\', $ds, $class) . '.php';
        if (!file_exists($file)) {
            die("Class {$class} can not be loaded");
        }

        require_once $file;
    }
}

$autoload = new Autoload([
    'qwerty' => 'r\qwe',
    'modules\admin' => 'q'
]);
spl_autoload_register([$autoload, 'load']);
