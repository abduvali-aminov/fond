<?php

namespace App\Interface;

interface ServiceInterface
{
    /**
     * Create model
     *
     * @param [type] $attribute
     * @return void
     */
    public function create($attribute);

    public function update($id, $attribute);
}
