<?php

namespace App\Service;

class HistoryService implements \App\Interfaces\ServiceInterface
{
    /**
     * Attribute for repository
     *
     * @var \App\Repository\HistoryRepository
     */
    public $repo;

    /**
     * Constructor
     *
     * @param HistoryRepository $appliesRepository
     */
    public function __construct(AppliesRepository $appliesRepository)
    {
        $this->repo = $appliesRepository;
    }

}
