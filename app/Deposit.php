<?php

namespace App;
use App\Buildings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposit extends Model
{
    public function building(){
        return $this->belongsTo(Buildings::class);
    }
    public function buildings(){
        return $this->hasMany(Buildings::class);
    }
}
