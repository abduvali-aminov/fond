<?php

namespace App\Service;

use App\Models\Apply;
use App\Models\Cause;
use App\Repository\AppliesRepository;

class AppliesService implements \App\Interface\ServiceInterface
{
    /**
     * Attribute for repository
     *
     * @var \App\Repository\AppliesRepository
     */
     public $repo;

    public function __construct(AppliesRepository $appliesRepository)
    {
        $this->repo = $appliesRepository;
    }
     /**
      * @inheritdoc
      */
    public function create($attribute)
    {
        return Apply::create($attribute);
    }

    /**
     * @inheritdoc
     */
    public function update($id, $attribute)
    {
        $model = $this->repo->findById($id);

        return $model->update($attribute);
    }

    /**
     * @inheritdoc
     */
    public function delete($id)
    {
        $model = $this->repo->findById($id);

        return $model->delete();
    }

    /**
     * @inheritdoc
     */
    public function read($id)
    {
        $model = $this->repo->findById($id);

        return $model;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function causes()
    {
        return Cause::all();
    }

}
