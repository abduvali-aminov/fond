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
     * @param integer $id
     * @return mixed
     */
    public function read($id);

    /**
     * 
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id);
}
