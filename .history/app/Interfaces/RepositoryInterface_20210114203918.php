<?php

namespace App\Interface;

interface RepositoryInterface
{
    /**
     * Find by attribute
     *
     * @param [type] $id
     * @return void
     */
    public function findById($id);

    public function findByAttribute($attribute, $value, $type = '=');

    public function getAll();
}
