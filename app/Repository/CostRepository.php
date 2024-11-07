<?php

use App\Models\Cost;

class CostRepository{

    public function getAllCost($request){
        return Cost::get();
    }
   
}