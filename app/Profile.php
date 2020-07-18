<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // a profile belongs to a user
    // we need to tell laravel that
    // laravel will take care of this ralation and fetching a user_id
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
