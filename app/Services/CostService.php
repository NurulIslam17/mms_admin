<?php

namespace App\Service;

use CostRepository;

class CostService
{
    protected $costRepository;
    public function __construct(CostRepository $costRepository) {
        $this->costRepository = $costRepository;
    }

    public function getAllCost($request)
    {
        return $this->costRepository->getAllCost($request);
    }
}
