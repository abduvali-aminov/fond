<?php

namespace App\Interface;

interface RepositoryInterface
{
    public function findById($id);

    public function findByAttribute($attribute, $value, $type = '=');

    public function getAll()
}
