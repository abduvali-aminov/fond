<?php

namespace App\Service;

use App\Repository\WeddingRepository;

class WeddingService implements \App\Interfaces\ServiceInterface
{
    /**
     *Attribute repository
     *
     * @var \App\Repository\WeddingRepository
     */
    public $repo;

    public function __construct(WeddingRepository )
    {

    }
}

