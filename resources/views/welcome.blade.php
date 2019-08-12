@extends('layouts.app')
<style>
    /* #kaka{
        width:50px;
    } */
    #img{
        width:700px;
        height:400px;
    }
    </style>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
 
    </head>
    <body>
    @section('content')
    <!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        
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

        <title>Fantom Blog</title>
        <!-- Bootstrap CSS -->
    
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
       
        <!--================Header Menu Area =================-->
        
        <!--================Post Slider Area =================-->
        <section class="post_slider_area">
			<div class="post_slider_inner owl-carousel">
				<div class="item">
					<div class="post_s_item">
						<div class="post_img">
							<img src="img/post-slider/post-s-4.jpg" alt="">
						</div>
						<div class="post_text">
							<a class="cat" href="#">Gadgets</a>
							<a href="single-blog.html"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        <!--================End Post Slider Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
      
            <div class="container">
          
                <div class="row">
                
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">   
                            <article class="blog_style1">
               
                            @foreach ($blogs as $blog)
                          
                            	<div class="blog_img">
                            		<img class="img-fluid" id='img' src="{{asset('/storage/'. $blog->photo)}}" alt="">
                            	</div>
                                
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<a class="cat" href="#">{{$blog->category}}</a>
                                      
										<a href="{{ url('/blogdetails/'. $blog->blog_id) }}"><h4>{{$blog->header}}</h4></a>
										<p>Lorem ipsum dolor sit amet,  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										<div class="date">
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$blog->post_date}} </a>

										</div>	
									</div>
                                </div>
                                @endforeach
                            </article>
                    
        
   
 
                        </div>
                      
                    </div>
                 
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                                <h4>Charlie Barber</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget"> 
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a  href="{{ url('/international/'.'international') }}" class="d-flex justify-content-between">
                                            <p>International</p>
                                            <p>{{$number}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/CookingTips/'.'Cooking Tips') }}" class="d-flex justify-content-between">
                                            <p>Cooking Tips</p>
                                            <p>{{$number1}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/ToursAndTravels/'.'Tours And Travel') }}" class="d-flex justify-content-between">
                                            <p>Tours and Travels</p>
                                            <p>{{$number2}}</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>															
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Adventure</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>						
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
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
    </body>
</html>
        @endsection
    </body>
</html>
