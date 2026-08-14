<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts =Posts::all();
        return view('posts',['posts'=>$posts]);  

    }

    public function create($threadId)
    {
        return view('posts-create', ['threadId' => $threadId]);
    }
    public function store(Request $request, $threadId)
{
    Posts::create([
        'body' => $request->body,
        'thread_id' => $threadId,
        'user_id' => 1,
    ]);

    return redirect('/threads');
}
}
