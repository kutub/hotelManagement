<?php

namespace App;
use App\Flats;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    public function flats(){
        return $this->hasMany(Flats::class);
    }
}
