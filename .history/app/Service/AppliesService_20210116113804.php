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

    public function __construct(AppliesRepository )
    {

    }
     /**
      *
      *
      * @return void
      */
    public function create()
    {

    }

}
