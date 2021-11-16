@extends('layouts.app')

@section('content')
<div class="about">
      <h2>About</h2>
      <div class="about-top">
         <div class="col-md-6 ab-top">
          <img src="{{asset('theme')}}/images/6.jpg" class="img-responsive about-image" alt="">
         </div>
         <div class="col-md-6 ab-top">
          <h3>Lorem Ipsum has been the industry's</h3>
          <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. of Lorem Ipsum. PageMaker including versions of Lorem Ipsum.</p>
          <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions Letraset sheets containing Lorem Ipsum passages, and more recently with including versions of Lorem Ipsum.</p>
         </div>
          <div class="clearfix"> </div>
      </div>
    <div class="team_grid">
          <h3 class="m_1">Meet Our Team</h3>
          <div class="span_3">
           <div class="col-md-6 ab-top">
            <ul class="span_2">
              <li class="span_2-left"><img src="{{asset('theme')}}/images/6.jpg" class="img-responsive" alt=""></li>
              <li class="span_2-right">
                <h3>Gummies lollipop</h3>
              
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
              </li>
              <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6 ab-top">
            <ul class="span_2">
              <li class="span_2-left"><img src="{{asset('theme')}}/images/5.jpg" class="img-responsive" alt=""></li>
              <li class="span_2-right">
                <h3>Gummies lollipop</h3>
                
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
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
                <h3>Gummies lollipop</h3>
               
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                
              </li>
              <div class="clearfix"> </div>
            </ul>
           </div>
           <div class="col-md-6 ab-top">
            <ul class="span_2">
              <li class="span_2-left"><img src="{{asset('theme')}}/images/4.jpg" class="img-responsive" alt=""></li>
              <li class="span_2-right">
                <h3>Gummies lollipop</h3>
               
                <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                
              </li>
              <div class="clearfix"> </div>
            </ul>
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

