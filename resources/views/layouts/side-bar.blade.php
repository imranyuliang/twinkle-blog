
        <div class="b-search">
            <form>
                <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="">
            </form>
        </div>
        <h3>All Categories</h3>
        <div class="blo-top">
            @foreach($categories ?? '' as $category)
            <li><a href="{{route('categories.show', $category->slug)}}">||   {{$category->name}}</a></li>
            @endforeach
            
        </div>
        <h3>Recent Posts</h3>
        <div class="blo-top">
            @foreach($blogs ?? '' as $blog)
            <div class="blog-grids">
                <div class="blog-grid-left">
                    <a href="{{route('blogs.show', $blog->slug)}}"><img src="/images/featured_image/{{ $blog->featured_image ? $blog->featured_image : '' }}" class="img-responsive" alt=""></a>
                </div>
                <div class="blog-grid-right">
                    <h4><a href="{{route('blogs.show', $blog->slug)}}">{{$blog->title}} </a></h4>
                    
                </div>
                <div class="clearfix"> </div>
            </div>
            @endforeach
        </div>
        
        <h3>Newsletter</h3>
        
        <div class="blo-top">
            <div class="name">
                <form>
                    <input type="text" placeholder="email" required="">
                </form>
            </div>  
            <div class="button">
                <form>
                    <input type="submit" value="Subscribe">
                </form>
            </div>
                <div class="clearfix"> </div>
        </div>
  

