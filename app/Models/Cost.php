<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected   $fillable = ['user_id', 'cost_on', 'status'];
}
