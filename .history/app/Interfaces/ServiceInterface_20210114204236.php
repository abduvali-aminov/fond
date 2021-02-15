<?php

namespace App\Interface;

interface ServiceInterface
{
    public function create($attribute);

    public function update($id, $attribute);
}
