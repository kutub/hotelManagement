<?php

namespace App;
use App\Buildings;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flats extends Model
{
    public function buildings(){
        return $this->belongsTo(Buildings::class);        
    }
}
