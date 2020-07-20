<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    // we can see this page without being logged in
    // now if we visit this page without logging in, we will be directed to login page
    // now we are protected
    public function __construct()
    {
        $this->middleware('auth');
    }

    // name the view name as the function name
    // name the folder name as the controller's name
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // validation
        // if we have any data that is not required then it will be ingnored
        //  'another' => '', 
        // laravel will know 'another' is another field that has no conditions
        $data = request()->validate([
           
            'caption' => 'required',
            'image' => 'required|image',

        ]);

        // we are not passing user id that's why we are getting error
        // we might not be signed in
        // we need to get the authenticated user
        // we will get the user id from the relationship
        // we don't need \App\Post::create($data) now
        // it will go to user then to posts method and save that post
        auth()->user()->posts()->create($data);;

        // easy way of saving data in our database
        // we have all the date in $data 
        // \App\Post::create($data);

        dd(request()->all());
        //return view('posts.create');
    }
}
