<?php

namespace App\Interfaces;

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
     * @return mixed
     */
    public function findByAttribute($attribute, $value, $type = '=');

    /**
     * Get All items
     *
     * @return mixed
     */
    public function getAll();
}
