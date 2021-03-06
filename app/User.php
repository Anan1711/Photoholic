<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // a user has one profile 
    // we would also want to fetch a profile of an user.
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // a user can have many posts
    // hasMany relation that's why posts 
    public function posts()
    {
        // ordering the post by when created and in descending order
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }
}
