 @extends('layouts.app')

@section('content')
    <div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Admin Dashboard</h1>
          <p>This is your awesome dashboard you can manage...</p>
        </div>
            
          <div class="span_3">
           <div class="col-md-6 ab-top">
            <ul class="span_2">
                <li class="span_2-left"><img src="{{asset('theme')}}/images/6.jpg" class="img-responsive" alt=""></li>
                <li class="span_2-right">
                  <h3>Blogs</h3>
                  <h4><a href="{{route('blogs.create')}}">Create Blog</a></h4>
                  <h4><a href="{{route('dashboard.blogs')}}">All Blogs</a></h4>
                  <h4><a href="{{route('blogs.trash')}}">Deleted Blogs</a></h4>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6 ab-top">
            <ul class="span_2">
                <li class="span_2-left"><img src="{{asset('theme')}}/images/5.jpg" class="img-responsive" alt=""></li>
                <li class="span_2-right">
                  <h3>Categories</h3>
                  <h4><a href="{{ route('categories.create') }}">Create Categories</a></h4>
                  <h4><a href="{{ route('categories.index') }}"> Manage Categories</a></h4>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
                <div class="clearfix"> </div>
          </div>
          <div class="span_4">
           <div class="col-md-6 ab-top">
            <ul class="span_2">
                <li class="span_2-left"><img src="{{asset('theme')}}/images/1.jpg" class="img-responsive" alt=""></li>
                <li class="span_2-right">
                  <h3>Users</h3>
                  <h4><a href="{{route('users')}}"> Manage Users</a></h4>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6 ab-top">
            <ul class="span_2">
                <li class="span_2-left"><img src="{{asset('theme')}}/images/4.jpg" class="img-responsive" alt=""></li>
                <li class="span_2-right">
                 <h3>Categories</h3>
                  <h4>Create Categories</h4>
                </li>
                <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="clearfix"> </div>
          </div>
     </div>
     </div> <!-- col-md-9 clossing  -->
        <div class="col-md-3 bann-left">
        @include('layouts.side-bar')
        </div>

 
@endsection
