<?php

namespace models;

use components\Model;

/**
 * Class Category
 * @package models
 *
 * @property integer $id
 * @property string $title
 * @property string $created_at
 */
class Category extends Model
{
    /**
     * @return string
     */
    public function tableName()
    {
        return 'categories';
    }

    /**
     * @return Category[]
     */
    public function getCategories()
    {
        return self::findAll();
    }

    /**
     * @return string
     */
    public function getPreparedDate()
    {
        return (new \DateTime($this->created_at))->format('d M Y');
    }
}