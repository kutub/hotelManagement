<?php

namespace App;
use App\Buildings;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public function building(){
        return $this->belongsTo(Buildings::class);
    }
}
