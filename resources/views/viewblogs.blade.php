<style>
body{
    width:1350px;
  background-color:blue;
}
    #p{
 margin-left:350px;
width:1000px;
    }
    
    #o{
	
        width:450px; 
		height:300px
    }
	#f{
		margin-right:10px;
	
	
	}
	#z{
		color:white;
	}
	#f{
		background-color:whitesmoke;
	margin-left:-1px;
	margin-top:7px;
	}
    h1{
        text-align:center;
    }
    </style>
    
<link rel="stylesheet" href="css1/bootstrap.css">
       <link rel="stylesheet" href="{{ URL::asset('vendors/linericon/style.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('css1/font-awesome.min.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('vendors/lightbox/simpleLightbox.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('vendors/nice-select/css/nice-select.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('vendors/animate-css/animate.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('vendors/jquery-ui/jquery-ui.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('css1/style.css') }}" />
       <link rel="stylesheet" href="{{ URL::asset('css1/responsive.css') }}" />
       @extends('layouts.app')
@section('content')
           <h1 >My Blogs</h1></br>
    <div class="row" id="p">

                                 <div class="col-lg-8">
                        <div class="blog_left_sidebar">   
                            <article class="blog_style1">
                            @foreach ($blogs as $blog)
                            	<div class="blog_img">
                                <img  class="img-fluid" id="img" src="{{asset('/storage/'. $blog->photo)}}"  alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<a class="cat" href="{{ url('/international/'.'international') }}">{{$blog->category}}</a>
										<a href="{{ url('/blogdetails/'.$blog->blog_id) }}"><h4>{{$blog->header}}</h4></a>
							
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$blog->post_date}} </a>
										 <span id="f"><a  href="{{ url('/editblog/'.$blog->blog_id) }}"><button name='edit' class="btn btn-primary">Edit</button></a>
										 </span><span id="f"><a href="{{ url('/deleteblog/'.$blog->blog_id) }}"><button class="btn btn-primary">Delete</button></a></span></h4>

										</div>	
									</div>
                                </div>
                                @endforeach
                            </article>
                    
        
   
 
                        </div>
                      
                    </div>
                    </div>
                    @endsection
                    <script  src="{{ URL::asset('js1/popper.js') }}"></script>
<script  src="{{ URL::asset('js1/bootstrap.min.js') }}"></script>
<script  src="{{ URL::asset('js1/stellar.js') }}"></script>
<script  src="{{ URL::asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script  src="{{ URL::asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script  src="{{ URL::asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script  src="{{ URL::asset('vendors/isotope/isotope-min.js') }}"></script>
<script  src="{{ URL::asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script  src="{{ URL::asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
<script  src="{{ URL::asset('js1/jquery.ajaxchimp.min.js') }}"></script>
<script  src="{{ URL::asset('js1/mail-script.js') }}"></script>
<script  src="{{ URL::asset('js1/theme.js') }}"></script>
<script  src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script  src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>