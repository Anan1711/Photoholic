<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    { 
        // fetching our USER
        // we have a model named User. It represents a single row in our database
        // we are finding the actual user by the user id
        // and storing it inside a variable 
        // then passing it to the view as an array
        // now we can use user in our view
        // 'findOrFail' Preventing breakdown of the app if users are trying to access a profile that doesn't exist 
        $user = (User::findOrFail($user)); 
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
