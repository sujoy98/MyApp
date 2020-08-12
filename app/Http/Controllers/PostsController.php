<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
we want to fetch our post so we need to bring in the model Post we created
which is in the namespace App and it has the title of Post i.e App\Post
*/
use App\Post;

class PostsController extends Controller
// all the function are mapped to routes
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        we can use any of the model function with
        Post, and this is auctually Eloquent which is object relational mapper
        here Post::all() means we are fetch all data form the models
        @posts is an Associative array
        */
        // $posts = Post::all();
        // return Post::where('title','Post Two')->get();
        //$posts = Post::orderBy('title','desc')->get();
        // loading the view form posts/index in views folder
        // paginate('posts per page') -> adding the page number
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts/index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=>'required'
        ]);
        // Create Post, we can create object of the Post here because we imported App\Post model
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();

        // we created a success message in message.blade.php
        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
