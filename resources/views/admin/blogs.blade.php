@extends('layouts.app')
@section('content')
 <div class="team_grid">
    <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
      <h1>Manage Blogs </h1>
      <p>This is your awesome dashboard you can manage...</p>
    </div>
    <table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Blog ID</th>
	      <th scope="col">Blog Title</th>
	      <th scope="col">Category</th>
	      <th scope="col">Author</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($blogs as $blog)
	    <tr>
	      <th scope="row">{{$blog->id}}</th>
	      <td>{{$blog->title}}</td>
	      <td>
	      @foreach($blog->category as $category)
	      {{ $category->name}},
	      @endforeach
	      </td>
	      <td>
	      	@if($blog->user)
	      	{{$blog->user->name}}
	      	@endif
	      </td>
	      <td><a href="{{route('blogs.edit', $blog->id)}}">Edit</a> / 
	      <td>
	      	<form method="post" action="{{ route('blogs.delete', $blog->id) }}">
               {{ method_field('delete') }}
                   <button type="submit">Delete</button>
                {{ csrf_field() }}
           </form>
          </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
 </div>
</div> <!-- col-md-9 clossing  -->
<div class="col-md-3 bann-left">
@include('layouts.side-bar')
</div>
@endsection
