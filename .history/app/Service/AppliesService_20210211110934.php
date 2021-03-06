<?php

namespace App\Service;

use App\Models\Apply;
use App\Models\Cause;
use App\Models\SummType;
use App\Repository\AppliesRepository;

class AppliesService implements \App\Interfaces\ServiceInterface
{
    /**
     * Attribute for repository
     *
     * @var \App\Repository\AppliesRepository
     */
    public $repo;

    /**
     * Constructor
     *
     * @param AppliesRepository $appliesRepository
     */
    public function __construct(AppliesRepository $appliesRepository)
    {
        $this->repo = $appliesRepository;
    }

    /**
      * @inheritdoc
      */
    public function create($attributes)
    {
        return Apply::create($attributes);

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
    public function edit_status_check($id)
    {
        $model = $this->repo->findById($id);
        $model->status = 3;

        return $model->save();
    }

    /**
     * @inheritdoc
     */
    public function edit_status_recheck($id)
    {
        $model = $this->repo->findById($id);
        $model->status = 2;

        return $model->save();
    }

    /**
     * @inheritdoc
     */
    public function added_history($id)
    {
        $model = $this->repo->findById($id);
        $model->status = 0;

        return $model->save();
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
     * @inheritdoc
     */
    public function causes($id)
    {
        return Cause::all();
    }

    /**
     * @inheritdoc
     */
    public function summ_type($id){
        return SummType::all();
    }


/**
     * Filter Applies
     *
     * @param string $value
     * @return \App\Models\Applies|null
     */
    public function filter($value)
    {
        return $this->repo->findByAttribute('name', '%'.$value.'%', 'like'        ;
    }



}
