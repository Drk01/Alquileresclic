<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function ads()
    {
        return $this->belongsToMany(Ad::class)->withTimestamps();
    }
}
