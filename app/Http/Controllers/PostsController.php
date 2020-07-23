<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        // stroing the image using store method
        // first parameter is a folder
        // second parameter is a directory
        // but not accessable by user beacause storage/app/public is not accessable by user
        // we need to create a link from public/storage to storage/app/public 
        // run php artisan storage:link
        $imagePath = request('image')->store('uploads', 'public');


        // resizing the imgae using intervention image library
        // rapping up the image by using make which is an intervention class
        // fitting by using fit
        $image = Image::make(public_path("storeage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        // we are not passing user id that's why we are getting error
        // we might not be signed in
        // we need to get the authenticated user
        // we will get the user id from the relationship
        // we don't need \App\Post::create($data) now
        // it will go to user then to posts method and save that post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        // easy way of saving data in our database
        // we have all the date in $data 
        // \App\Post::create($data);

        return redirect('/profile/' . auth()->user()->id);
    }
}
