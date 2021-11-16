@extends('layouts.app')

@section('content')
<div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Manage About Us Page</h1>
          <p>This is your awesome dashboard you can manage...</p>
        </div>

        <div class="col-md-12">
           <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
                   <label for="title">Blog Title</label>
                   <input type="text" name="title" class="form-control" placeholder="Title Text Here">
               </div>

               <div class="form-group">
                   <label for="body">Blog Body</label>
                    <textarea name="body" class="form-control my-editor" rows="24" placeholder="Body Text Here">{!! old('body') !!}</textarea>


               </div>

              <!--  <div class="form-group">
                 <label for="featured_image">Blog Featured Image</label>
                 <input type="file" name="featured_image" class="form-control">
               </div>  -->

                <div class="form-group form-check form-check-inline">
                  <h3>Categories: </h3>
                @foreach($categories as $category)
                  <input type="checkbox" value="{{$category->id}}" name="category_id[]" class="form-check-input">
                  <label class="form-check-label btn-margin-right">{{$category->name}}</label>
               @endforeach
                </div>
                
               
                 <div class="form-group">
                   <label for="featured_image">Featured Image</label>
                   <input type="file" name="featured_image" class="form-control">
                 </div> 
               

              <div>
                <button class="btn btn-primary" type="submit">Create a new blog</button>
              </div>
                {{ csrf_field() }}
           </form>
       </div>
    </div>
  </div> <!-- col-md-9 clossing  -->
  <div class="col-md-3 bann-left">
  @include('layouts.side-bar')
  </div>
@endsection

