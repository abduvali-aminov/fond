<?php

namespace App\Interface;

interface ServiceInterface
{
    /**
     * Create model
     *
     * @param string $attribute
     * @return void
     */
    public function create($attribute);

    /**
     * 
     *
     * @param [type] $id
     * @param [type] $attribute
     * @return void
     */
    public function update($id, $attribute);
}
