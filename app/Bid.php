<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $guarded = [];
    
    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
