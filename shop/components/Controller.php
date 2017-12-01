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
}
