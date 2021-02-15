<?php

namespace App\Interface;

interface RepositoryInterface
{
    /**
     * Find by Attribute
     *
     * @param [type] $id
     * @return void
     */
    public function findById($id);

    public function findByAttribute($attribute, $value, $type = '=');

    public function getAll();
}
