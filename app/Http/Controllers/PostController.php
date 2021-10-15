<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('index')->with(['posts'=>$posts]);
    }

    public function show(Post $post){
        return view('show')->with(['post'=>$post]);
    }

    public function add(){
        return view('add');
    }

    public function store(PostRequest $request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/');
    }

    public function edit(Post $post){
        return view('edit')->with(['post'=>$post]);
    }

    public function update(PostRequest $request, Post $post){
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}
