<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //

    public function index(){
    	return view('users.index')->with('users', User::all());
    }

    public function show($name) {
		$user = User::where('name', $name)->first();
		return view('users.show', compact('user'));
	}

	public function update(Request $request, $id){
		User::findOrFail($id)->update($request->only('role_id'));
		return back();
	}
	public function delete($user) {
		$user = User::findOrFail($user);
        $user->delete();
		return back();
	}
	
}
