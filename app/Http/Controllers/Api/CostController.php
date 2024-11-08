<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\CostService;
use Illuminate\Http\Request;

class CostController extends Controller
{

    protected $costService;
    function __construct(CostService $costService)
    {
        $this->costService = $costService;
    }

    public function index(Request $request)
    {
        $costs = $this->costService->getAllCost($request);
        return response()->json($costs);
    }

    public function create() {}


    public function store(Request $request)
    {
        //
    }


    public function show(string $id) {}



    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
