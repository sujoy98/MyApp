<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importing User model
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // getting logged-in user id
        $user_id = auth()->user()->id;

        // using User model to find with respect to user_id
        $user = User::find($user_id);

        // as we have added the model relationship in Post and User model we can use $user->posts
        return view('home')->with('posts',$user->posts);
    }
}
