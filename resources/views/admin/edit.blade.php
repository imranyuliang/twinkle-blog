 @extends('layouts.app')

@section('content')
 <div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Eidt Blogs </h1>
          <p>This is Blog Edit Page...</p>
        </div>
        <div class="col-md-12">
           <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
            {{ method_field('patch') }}
               <div class="form-group">
                   <label for="title">Title</label>
                   <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
               </div>

               <div class="form-group">
                   <label for="body">Body</label>
                   
                   <textarea name="body" class="form-control my-editor" rows="24">{{ $blog->body }}</textarea>
               </div>

                <div class="form-group form-check form-check-inline">
                {{ $blog->category->count() ? 'Current categories: ' : '' }} &nbsp;
                @foreach($blog->category as $category)
                  <input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input" checked>
                  <label class="form-check-label btn-margin-right">{{ $category->name }}</label>
                @endforeach
               </div>

               <div class="form-group form-check form-check-inline">
                {{ $filtered->count() ? 'Others categories: ' : '' }} &nbsp;
                @foreach($filtered as $category)
                  <input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input">
                  <label class="form-check-label btn-margin-right">{{ $category->name }}</label>
                @endforeach
               </div>

                <div class="form-group">
                 <label for="featured_image">Featured Image</label>
                 <input type="file" name="featured_image" class="form-control">
               </div> 

              <div>
               <button class="btn btn-primary" type="submit">Update blog</button>
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
