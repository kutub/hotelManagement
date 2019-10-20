<?php

namespace App\Http\Resources;

use App\Withdrawal;
use Illuminate\Http\Resources\Json\JsonResource;

class DashboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'total_rent' => $this->deposits->sum('total'),
            'total_expenses' => $this->expenses->sum('total'),
            'total_withdraw' => Withdrawal::all()->sum('total'),
        ];
        
    }
}
