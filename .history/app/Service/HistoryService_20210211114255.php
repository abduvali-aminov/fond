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
     * @param HistoryRepository $historyRepository
     */
    public function __construct(AppliesRepository $appliesRepository)
    {
        $this->repo = $appliesRepository;
    }

}
