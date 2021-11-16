@extends('layouts.app')

@section('content')
<!-- content -->
<div class="container">
<div class="content-top">
    
            <div class="single">
                <div class="single-top">
                    <h1 class="twinkle-h1">{{$blog->title}}</h1>
                    <img src="/images/featured_image/{{ $blog->featured_image ? $blog->featured_image : '' }}" class="img-responsive" alt="">
                    
                    <p class="sin">{{$blog->body}}</p>
                   
                        <div class="artical-links">
                            <ul>
                                @if($blog->user)
                                <li><small> </small><span>{{ $blog->created_at->diffForHumans() }}</span></li>
                                <li><a href="{{route('users.show', $blog->user->name)}}"><small class="admin"> </small><span>{{ $blog->user->name }}</span></a></li> 
                                @endif
                                <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
                                @foreach($blog->category as $category)
                                <li><a href="{{route ('categories.show', $category->slug ) }}"><small class="posts"> </small><span>{{$category->name}}</span></a></li>
                                @endforeach
                                <li><a href="{{route('blogs.show', $blog->slug)}}"><small class="link"> </small><span>permalink</span></a></li>
                            </ul>
                         </div>
                        <div class="respon">
                            <h2>Responses so far</h2>
                            <aside>
                              <div id="disqus_thread"></div>
                            <script>
                              
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://immfy.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            </aside>
                        </div>
                </div>
                <div class="blog-content-right">
                         @include('layouts.side-bar')
                        <!---- //End-tag-weight---->
                    </div>
                    <div class="clearfix"> </div>
            </div>
</div>
<!-- content -->
@endsection

