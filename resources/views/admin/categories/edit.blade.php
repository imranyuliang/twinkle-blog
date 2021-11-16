@extends('layouts.app')

@section('content')
    <div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Edit Category</h1>
          <p>This is your awesome dashboard you can manage...</p>
        </div>
        <div class="col-md-12">
           <form action="{{ route('categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
            {{ method_field('patch') }}
               <div class="form-group">
                   <label for="title">Category Name</label>
                   <input type="text" name="name" class="form-control" value="{{$category->name}}">
               </div>
              <div>
                <button class="btn btn-primary" type="submit">Create a New Category</button>
              </div>
                {{ csrf_field() }}
           </form>
       </div>
    </div>
 
@endsection
