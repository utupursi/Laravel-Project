<style>
body{
  

}
#p{
 margin-left:310px;
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
    #img{
        width:700px;
        height:400px;
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

           <h1 >Blogs</h1>      
    <div class="row" id="p">

                                 <div class="col-lg-8">
                        <div class="blog_left_sidebar">   
                        @foreach ($blogs as $blog)
                       
                            <article class="blog_style1">
                         
                            	<div class="blog_img">
                                <img  id="img" src="{{asset('/storage/'. $blog->photo)}}" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<a class="cat" href="#">{{$blog->category}}</a>
										<a href="{{ url('/blogdetails/'.$blog->blog_id) }}"><h4>{{$blog->header}}</h4></a>
							
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$blog->post_date}} </a>

										</div>	
									</div>
                                </div>
                            
                            </article>
                    
                            @endforeach
        
   
 
                        </div>
                      
                    </div>
                    </div>
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