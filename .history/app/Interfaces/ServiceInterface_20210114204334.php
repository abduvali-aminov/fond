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
     * Update model
     *
     * @param integer $id
     * @param string $attribute
     * @return void
     */
    public function update($id, $attribute);
}
