<?php

namespace App\Service;

use CostRepository;

class CostService
{
    protected $costRepository;
    public function __construct(CostRepository $costRepository) {}

    public function getAllCost($request)
    {
        return $this->costRepository->getAllCost($request);
    }
}
