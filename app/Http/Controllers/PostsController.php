<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }
    //
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'hike' => 'required',
            'image' => 'required', 'image',
        ]);

        $hikepath = $data["hike"];
        $imagepath = request('image')->store('/uploads/'.$hikepath, 'public');
       // dd(request('image')->store('uploads', 'public'));


        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'hike' => $data['hike'],
            'image' => $imagepath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

}
