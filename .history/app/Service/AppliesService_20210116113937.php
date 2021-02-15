<?php

namespace App\Service;

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
    public function create($a)
    {

    }

}
