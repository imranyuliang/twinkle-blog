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
		  	@foreach($trashedBlogs as $blog)
		    <tr>
		    	
		      <th scope="row">{{$blog->id}}</th>
		      <td>{{$blog->title}}</td>
		      <td>Laravel</td>
		      <td>Imran</td>
		      <td>
		      	<form method="get" action="{{ route('blogs.restore', $blog->id) }}">
		            <button type="submit" class="btn btn-success btn-sm pull-left btn-margin-right">
		                Restore
		            </button>
		            {{ csrf_field() }}
		        </form>
		     
		      <td>
		        {{-- permanent delete --}}
		        <form method="post" action="{{route('blogs.permanentDelete', $blog->id)}}">
		            {{ method_field('delete') }}
		            <button type="submit" class="btn btn-danger btn-sm pull-left btn-margin-right">
		                Permanent delete
		            </button>
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
