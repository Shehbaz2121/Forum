<?php

namespace App\Http\Controllers;

use App\Models\Threads;
use Illuminate\Http\Request;
use App\Models\Category;

class ThreadsController extends Controller
{
    //
    public function index() {

        $threads = Threads::all();
        return view('threads',['threads'=>$threads]);  

    }
    public function create()
    {
    $categories = Category::all();
    return view('threads-create', ['categories' => $categories]);
 }

   public function store(Request $request)
{
    Threads::create([
        'title' => $request->title,
        'category_id' => $request->category_id,
        'user_id' => 1, // temporary until login/auth is built
    ]);

    return redirect('/threads');
}
    public function show($id)
    {
    $thread = Threads::find($id);
    return view('thread-show', ['thread' => $thread]);
    }

}