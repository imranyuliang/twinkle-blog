<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
    	return view('about.index');
    }

    public function create(){
    	return view('about.create');
    }
}
