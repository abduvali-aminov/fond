<?php

namespace App\Interface;

interface ServiceInterface
{
    /**
     * Undocumented function
     *
     * @param [type] $attribute
     * @return void
     */
    public function create($attribute);

    public function update($id, $attribute);
}
