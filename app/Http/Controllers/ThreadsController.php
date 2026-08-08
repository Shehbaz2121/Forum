<?php

namespace App\Http\Controllers;

use App\Models\Threads;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    //
    public function index() {

        $threads = Threads::all();
        return view('threads',['threads'=>$threads]);  

    }
}
