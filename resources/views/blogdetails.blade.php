@extends('layouts.app')
<style>
#t{
  margin-top:10px;
}
#p{
  
 width:700px;
 height:400px;
}
#img{
  width:700px;
  height:400px;
}
#text{
  text-align:justify;
}


</style>
   @section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$blog[0]->header}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="{{url('/userprofile/'. $blog[0]->id)}}">{{$blog[0]->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$blog[0]->post_date}}</p>

        <hr>

        <!-- Preview Image -->
        <hr>
     <img  id="img" src="{{asset('/storage/'. $blog[0]->photo)}}">
        <!-- Post Content -->
       <div id='text'> <?php echo $blog[0]->text?></div>

<?php if(!empty($blog[0]->link)):?>
        <iframe id="t" width="710" height="415"src="https://www.youtube.com/embed/<?php echo $blog[0]->link;?>"></iframe>
        <?php  endif;?>
     

  

  

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
     

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{ url('/international/'.'international') }}">international</a>
                  </li>
              
                  <li>
                    <a href="{{ url('/ToursAndTravels/'.'Tours and Travel') }}">Tours and Travels</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{ url('/CookingTips/'.'Cooking Tips') }}">Cooking tips</a>
                  </li>
        
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="single-widget protfolio-widget">
						<img class="img-fluid" src="http://d4.cdn.adbetnet.com/uploads/media/5/6/2765/v2/Bonus_5000_3sporta_260x400.gif" alt="">
						<a href="#">
							<h4>Sponsored by: 1XBET</h4>
						</a>
						<p class="p-text">
					 1XBET IS OUR FIRST SPONSOR
						</p>
					
		
					</div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; sergiasblogebi.ge 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
@endsection
</html>
