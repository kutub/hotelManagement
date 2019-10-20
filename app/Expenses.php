<?php

namespace App;
use App\Buildings;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    public function building(){
        return $this->belongsTo(Buildings::class);
    }
}
