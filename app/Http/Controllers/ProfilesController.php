<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index($user)

    {
        // find user in database
        $user = User::findOrFail($user);

        //pass data to view
        return view('profiles.index', [
            'user' => $user,
        ]);
        
    }
}
