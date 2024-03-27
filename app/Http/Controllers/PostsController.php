<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::all();    
        // $posts = Post::orderBy('title','desc')->get();  sorted return
        // $posts = Post::where('title', "Post 2")->get(); specified return
        // $posts = DB::select('SELECT * FROM posts'); qurey based return
        // $posts = Post::orderBy("title",'desc')->take(1)->get(); specified return
        // $posts = Post::orderBy("title",'desc')->paginate(1);    

        $posts = Post::all();
        return view('posts.index')->with("posts", $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
