<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class BlogsController extends Controller
{
    //

    public function create(){
        $categories = Category::latest()->get();
    	return view('admin.create', compact('categories'));
    }

    public function store(Request $request){
    	
    	$input = $request->all();
    	// meta stuff
		$input['slug'] = str::slug($request->title);
		$input['meta_title'] = str::limit($request->title, 55);
		$input['meta_description'] = str::limit($request->body, 155);

        // image upload
        if ($file = $request->file('featured_image')) {
            $name = uniqid() . $file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('images/featured_image/', $name);
            $input['featured_image'] = $name;
        }

		// $blog = Blog::create($input);
        $blogByUser = $request->user()->blogs()->create($input);


        if ($request->category_id) {
            $blogByUser->category()->sync($request->category_id);
        }
		return redirect('/dashboard');
    }

    // public function show($id){
    // 	$blogs =Blog::findOrFail($id)-latest()->get();
    // 	return view('admin.show_blogs', compact($blogs));
    // }
    public function show($slug) {
        // $blog = Blog::findOrFail($id);
        $blog = Blog::whereSlug($slug)->first();
        $categories = Category::latest()->get();
        return view('website.single', ['blog' => $blog, 'categories' => $categories]);
    }

    public function edit($id){
        $categories = Category::latest()->get();
    	$blog = Blog::findOrFail($id);
        // filtered unused category
        $bc = array();
        foreach ($blog->category as $c) {
            $bc[] = $c->id - 1;
        }
        $filtered = Arr::except($categories, $bc);
        // filtered unused category
    	return view('admin.edit', ['blog' => $blog,'categories' => $categories, 'filtered' => $filtered]);
    }

    public function update(Request $request, $id){
    	$input = $request->all();
    	$blog = Blog::findOrFail($id);

    	//meta stuff
    	$input['slug'] = str::slug($request->title);
    	$input['meta_title'] = str::limit($request->title, 55);
    	$input['meta_description'] = str::limit($request->body, 155);

        //Image update
        if ($file = $request->file('featured_image')) {
            if ($blog->featured_image) {
                unlink('images/featured_image/' . $blog->featured_image);
            }
            $name = uniqid() . $file->getClientOriginalName();
            $name = strtolower(str_replace(' ', '-', $name));
            $file->move('images/featured_image/', $name);
            $input['featured_image'] = $name;
        }

    	$blog->update($input);

        // sync with categories
        if ($request->category_id) {
            $blog->category()->sync($request->category_id);
        }

    	return redirect('/dashboard/blogs');

    }

    public function delete($id) {
		$blog = Blog::findOrFail($id);
		$blog->delete();
		return redirect('dashboard/blogs');
	}
	public function trash(){
		$trashedBlogs = Blog::onlyTrashed()->get();
		return view('admin.trash', compact('trashedBlogs'));
	}
	public function restore($id){
		$restoreBlog = Blog::onlyTrashed()->findOrFail($id);
		$restoreBlog->restore($restoreBlog);
		return redirect('dashboard/blogs');
	}
	public function permanentDelete($id){
		$permanentDelete = Blog::onlyTrashed()->findOrFail($id);
		$permanentDelete->forceDelete($permanentDelete);
		return back();
	}
}
