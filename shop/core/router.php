<?php

function run()
{
    $url = trim(urldecode($_SERVER['REQUEST_URI']), " \t\n\r\0\x0B/");
    $getParamsStart = strpos($url, '?');
    if (false !== $getParamsStart) {
        $url = substr($url, 0, $getParamsStart);
    }
    $urlParts = array_filter(explode('/', $url));

    $controller = prepareControllerFileName(getArrayValue($urlParts, 0, 'index'));
    $controllersDir = getConfigParameter('controllers');
    if (!file_exists("{$controllersDir}/{$controller}.php")) {
        die('Controller is not exists');
    }

    require_once "{$controllersDir}/{$controller}.php";
    $action = prepareActionFunctionName(getArrayValue($urlParts, 1, 'index'));
    if (!function_exists($action)) {
        die('Action is not exists');
    }

    return $action();
}

function prepareControllerFileName($urlPart)
{
    return camelizeString($urlPart) . 'Controller';
}

function prepareActionFunctionName($urlPart)
{
    return 'action' . camelizeString($urlPart);
}
