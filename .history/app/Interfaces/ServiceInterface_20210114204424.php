<?php

namespace App\Interface;

interface ServiceInterface
{
    /**
     * Create model
     *
     * @param string $attribute
     * @return bool
     */
    public function create($attribute);

    /**
     * Update model
     *
     * @param integer $id
     * @param string $attribute
     * @return bool
     */
    public function update($id, $attribute);

    /**
     * Read model
     *
     * @param [type] $id
     * @return void
     */
    public function read($id);

}
