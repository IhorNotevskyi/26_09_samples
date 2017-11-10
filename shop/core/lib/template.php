<?php

/**
 * @param string $template
 * @param array $variables
 * @return string
 */
function renderTemplate($template, array $variables = [])
{
    $templatesDir = getConfigParameter('templates');
    $layout = "{$templatesDir}/layouts/main.php";
    if (!file_exists($layout)) {
        die('Layout template is not exists');
    }

    $template = "{$templatesDir}/{$template}.php";
    if (!file_exists($template)) {
        die('Template is not exists');
    }

    extract($variables);

    ob_start();
    require_once $template;
    $content = ob_get_clean();

    ob_start();
    require_once $layout;
    return ob_get_clean();
}
