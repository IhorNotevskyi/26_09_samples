<?php

function actionIndex()
{
    return renderTemplate('index/index', [
        'qwerty' => 'Some text there',
        'name' => 'Dmytro Kotenko'
    ]);
}

function actionList()
{
    return renderTemplate('index/list');
}