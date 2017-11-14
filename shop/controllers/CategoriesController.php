<?php

function actionList()
{
    $pageSize = 2;

    $sql = "SELECT * FROM categories LIMIT {$pageSize}";

    $page = getArrayValue($_GET, 'page');
    if ($page) {
        $offset = max($page - 1, 0) * $pageSize;
        $sql .= " OFFSET {$offset}";
    }

    return renderTemplate('categories/list', [
        'categories' => selectRows($sql)
    ]);
}

function actionCreate()
{
    if (getIsPostRequest()) {
        $title = getArrayValue($_POST, 'title');
        $sql = <<<SQL
INSERT INTO categories (title) VALUES ('{$title}')
SQL;

        executeSQLString($sql);
        redirect('/categories/list');
    }

    return renderTemplate('categories/create');
}
