<?php

namespace components;

use helpers\Config;

/**
 * Class Application
 * @package components
 */
class Application
{
    /**
     * Application constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        Registry::set('config', Config::getInstance()->addAttributes($config));

        $template = new Template(Registry::get('config')->getAttribute('templates'));
        Registry::set('template', $template);
    }

    public function run()
    {
        $router = new Router($_SERVER['REQUEST_URI']);
        return $router->dispatch();
    }
}