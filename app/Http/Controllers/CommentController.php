<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comments = User::find(auth()->id())->comments()->orderByRaw('created_at DESC')->paginate(5);

      return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
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
            'description'=>'required',
        ]);

        Comment::create($request->all());

        return redirect('/post/show/'.$request['post_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(comments $comments)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Comment::where('id', $id)->first()->user_id == auth()->id())
      {
          $comment = Comment::find($id);
          $post = Comment::find($id)->post;
          return view('comments.edit', ['comment' => $comment, 'post' => $post]);
      }

      return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      Comment::find($request->id)->update($request->all());
      return redirect('/post/show/'.$request->post_id)->withStatus(__('Comment successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comments  $comments
     * @return \Illuminate\Http\Response
     */
     public function delete($id)
     {
         if (Comment::where('id', $id)->first()->user_id == auth()->id())
         {
           Comment::find($id)->delete();
             return redirect()->back()->withStatus(__('Comment successfully deleted.'));
         }

         return abort(404);
     }
}
