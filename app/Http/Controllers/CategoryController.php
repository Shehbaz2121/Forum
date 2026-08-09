<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        // Logic to retrieve and return categories
        $categories = Category::all();
        return view('categories',['categories'=>$categories]);    
    
    }

    public function show($id)
    {
    $category = Category::find($id);
    return view('category-show', ['category' => $category]);
    }

}
