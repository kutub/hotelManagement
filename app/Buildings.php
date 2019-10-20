<?php

namespace App;
use App\Flats;
use App\Deposit;
use App\Expenses;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    public function flats(){
        return $this->hasMany(Flats::class);
    }
    public function deposits(){
        return $this->hasMany(Deposit::class);
    }
    public function expenses(){
        return $this->hasMany(Expenses::class);
    }
}
