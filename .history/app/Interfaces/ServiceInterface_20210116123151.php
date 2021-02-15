<?php

namespace App\Interface;

interface ServiceInterface
{

    /**
     * Create model
     *
     * @param String $attribute
     * @return bool
     */
    public function create($attribute);

    /**
     * Update
     *
     * @param integer $id
     * @param array $attribute
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
     * Delete model
     *
     * @param integer $id
     * @return bool
     */
    public function delete($id);
}
