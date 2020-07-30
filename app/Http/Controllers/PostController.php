<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('author_id', auth()->id())->orderByRaw('created_at DESC')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        Post::create($request->all());

        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $posts = Post::where('title', 'like', '%'.$request->search.'%')->orWhere('body', 'like', '%'.$request->search.'%')->paginate(5);
        return view('posts.search', ['search' => $request->search, 'posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('posts.id', $id)->leftJoin('users', 'users.id', '=', 'author_id')
            ->select('posts.id', 'posts.author_id', 'posts.title', 'posts.body', 'posts.created_at', 'users.name')
            ->orderByRaw('posts.created_at DESC')->get();
        $comments = Post::find($id)->comments()->paginate(5);
        return view('posts.show', ['post' => $post, 'comments' => $comments]);
    }

    public function edit($id)
    {
        if (Post::where('id', $id)->first()->author_id == auth()->id())
        {
            $post = Post::where('id', $id)->get();
            return view('posts.edit', ['post' => $post]);
        }

        return abort(404);
    }

    public function update(Request $request)
    {
        Post::find($request->id)->update($request->all());
        return redirect('/post/show/'.$request->id)->withStatus(__('Post successfully updated.'));
    }

    public function delete($id)
    {
        if (Post::where('id', $id)->first()->author_id == auth()->id())
        {
            Post::find($id)->delete();
            return redirect('/post')->withStatus(__('Post successfully deleted.'));
        }

        return abort(404);
    }
}
