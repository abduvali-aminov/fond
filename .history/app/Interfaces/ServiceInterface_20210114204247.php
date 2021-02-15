<?php

namespace App\Interface;

interface ServiceInterface
{
    /**
     * Create 
     *
     * @param [type] $attribute
     * @return void
     */
    public function create($attribute);

    public function update($id, $attribute);
}
