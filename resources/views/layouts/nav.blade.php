 <div class="header">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{asset('theme')}}/images/twinkle-logo.png" class="img-responsive header-logo" alt=""></a>
            </div>
                <div class="head-nav">
                    <span class="menu"> </span>
                        <ul class="cl-effect-1">
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>

                             <!-- Authentication Links -->
	                        @guest
	                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
	                            @endif

	                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
	                            @endif
		                        @else
	                            <li class="nav-item dropdown">
	                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                                    {{ Auth::user()->name }}
	                                </a>

	                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>
	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	                                        @csrf
	                                    </form>
	                                </div>
	                            </li>
	                        @endguest
                            <div class="clearfix"></div>
                        </ul>
                </div>

            <!-- script-for-nav -->
                <script>
                    $( "span.menu" ).click(function() {
                      $( ".head-nav ul" ).slideToggle(300, function() {
                        // Animation complete.
                      });
                    });
                </script>
            <!-- script-for-nav -->
            
                <div class="clearfix"> </div>
        </div>
    </div>
  

