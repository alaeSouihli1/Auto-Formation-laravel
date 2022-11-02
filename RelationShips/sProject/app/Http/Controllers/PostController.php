<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        $posts=Post::all();
        return view('index',['posts'=>$posts]);
    }

  
    public function create()
    {
        return view('create');
    }

   
    public function store(Request $request)
    {
        $post=new Post();
        $post->title=$request->input('title');
        $post->save();
        return redirect(route('posts.index'));
    }

  
    public function show($id)
    {
        return view('show',['post'=>Post::findOrFail($id)]);
    }

    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('edit',['post'=>$post]);
    }

   
    public function update(Request $request, $id)
    {
        $toUpdate=Post::findOrFail($id);
        $toUpdate->title=$request->input('title');
        $toUpdate->save();
        return redirect(route('posts.index'));
    }

   
    public function destroy($id)
    {
        $toDelete=Post::findOrFail($id);
        $toDelete->delete();
        return redirect(route('posts.index'));
    }
}
