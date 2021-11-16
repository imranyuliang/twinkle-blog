@extends('layouts.app')

@section('content')
<div class="main-1">
        
            <div class="register">
               <form method="POST" action="{{ route('register') }}">
                @csrf
                 <div class="register-top-grid">
                    <h3>PERSONAL INFORMATION</h3>

                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Your Full Name<label>*</label></span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>

                     

                     <div class="wow fadeInRight" data-wow-delay="0.4s">
                         <span>Email Address<label>*</label></span>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                     </div>



                     <div class="clearfix"> </div>
                       <a class="news-letter" href="#">
                         <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                       </a>
                     </div>


                     <div class="register-bottom-grid">
                            <h3>LOGIN INFORMATION</h3>

                             <div class="wow fadeInLeft" data-wow-delay="0.4s">
                                <span>Password<label>*</label></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>

                             <div class="wow fadeInRight" data-wow-delay="0.4s">
                                <span>Confirm Password<label>*</label></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                             </div>
                     </div>
                     <div class="clearfix"> </div>
                <div class="register-but">
                  <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                      
            
                </div>
                </form>
                
           </div>
    </div>
</div>
    <div class="col-md-3 bann-left">
            @include('layouts.side-bar')
            </div>
@endsection
