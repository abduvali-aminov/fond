<?php

namespace App\Interface;

interface RepositoryInterface
{
    /**
     * Find by Attribute
     *
     * @param integer $id
     * @return mixed
     */
    public function findById($id);

    /**
     * Find by attribute
     *
     * @param string $attribute
     * @param string $value
     * @param string $type
     * @return void
     */
    public function findByAttribute($attribute, $value, $type = '=');

    public function getAll();
}
