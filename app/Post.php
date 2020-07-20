<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // stopping fillable
    // we are telling laravel to not guard anything 
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
