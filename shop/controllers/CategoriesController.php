<?php

namespace controllers;

use models\Category;

/**
 * Class CategoriesController
 * @package controllers
 */
class CategoriesController extends \components\Controller
{
    public function actionList()
    {
        $model = new Category();
        return $this->render('categories/list', [
            'categories' => $model->getCategories()
        ]);
    }

    public function actionCreate()
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
}
