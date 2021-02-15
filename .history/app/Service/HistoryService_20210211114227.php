<?php

namespace App\Service;

class HistoryService implements \App\Interfaces\ServiceInterface
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

}
