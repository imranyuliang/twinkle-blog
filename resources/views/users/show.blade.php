@extends('layouts.app')

@section('content')
   <div class="about">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>This is {{ $user->name }}'s Blogs Page</h1>
          <p>{{$user->name}} is {{$user->role->name}} of Twinkle Blog. All Blogs here from {{$user->name}}</p>
        </div>
        <div class="team_grid">
          <div class="span_3">

           <div class="col-md-12 ab-top">
            @foreach($user->blogs as $blog)
            <ul class="span_2">
                <li class="span_2-left"><a href="{{route('blogs.show', $blog->slug)}}"><img src="/images/featured_image/{{ $blog->featured_image ? $blog->featured_image : '' }}" class="img-responsive" alt=""></a></li>
                <li class="span_2-right">
                  <h3><a href="{{route('blogs.show', $blog->slug)}}">{{$blog->title}}</a></h3>
                  <p>{!! Illuminate\Support\str::limit($blog->body, 100) !!}</p>
                </li>
                <li>
                    @if($blog->user)
                    Author: <a href="{{route('users.show', $blog->user->name)}}">{{ $blog->user->name }}</a> | Posted: {{ $blog->created_at->diffForHumans() }} 
                    @endif
                     | Category: @foreach($blog->category as $category)
                        <a href="{{route('categories.show', $category->slug)}}">{{$category->name}}</a>
                     @endforeach
               </li>
                <div class="clearfix"> </div>
            </ul>
            @endforeach
           </div>

            <div class="clearfix"> </div>
          </div>
        </div>
    </div>
</div> <!-- col-md-9 clossing  -->
<div class="col-md-3 bann-left">
@include('layouts.side-bar')
</div>
@endsection

