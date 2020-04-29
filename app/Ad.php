<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
}
