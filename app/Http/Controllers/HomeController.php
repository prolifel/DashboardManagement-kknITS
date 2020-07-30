<?php

namespace App\Http\Controllers;

use App\Post;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::leftJoin('users', 'users.id', '=', 'author_id')
            ->select('posts.id', 'posts.title', 'posts.body', 'posts.created_at', 'users.name')
            ->orderByRaw('posts.created_at DESC')->paginate(5);

        return view('home', compact('posts'));
    }
}
