<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;


class AdminController extends Controller
{
    //

    public function index(){
    	$categories = Category::latest()->get();
    	return view('admin.index', ['categories' => $categories]);
    }

    public function blogs_index(){
    	$blogs = Blog::latest()->get();
    	$categories = Category::latest()->get();
    	return view('admin.blogs', ['blogs' => $blogs, 'categories' => $categories]);
    }
}
