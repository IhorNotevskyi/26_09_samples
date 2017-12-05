<?php

namespace components;

/**
 * Class Controller
 * @package components
 */
abstract class Controller
{
    /**
     * @param string $view
     * @param array $variables
     * @return string
     */
    public function render($view, $variables = [])
    {
        return $this->getView()->render($view, $variables);
    }

    /**
     * @return Template
     */
    protected function getView()
    {
        return Registry::get('template');
    }

    /**
     * @return Config
     */
    protected function getConfig()
    {
        return Registry::get('config');
    }
}
