<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    //
    public function index()
    {
        // $blogs = Blog::latest()->get();
        $categories = Category::latest()->get();
        // $blogs = Blog::latest()->paginate(10);
        return view('layouts.side-bar', ['categories' => $categories]);
    }
}
