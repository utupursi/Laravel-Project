
<style>
    #p{
        margin-top:10px;
    }
    #k{
        font-size:20px;
    }
   body{
/* background-image: url("https://i.ytimg.com/vi/jkEL-9TlN8Y/maxresdefault.jpg"); */
background-size:100%;
   }
   #field1{
       width:300px;
       /* border:1px solid whitesmoke; */
   }
</style>
<!DOCTYPE html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script  src="{{ URL::asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script src="js1/jquery/jquery-2.2.4.min.js"></script>
</head>
 <body>

<div class="content">
<div class="container">
<h2 class="text-center"></h2>
<form method="post" enctype="multipart/form-data" action="{{ url('/blog') }}" >
{{ csrf_field() }}
     <div class="form-group" id="p">
    <label for="field1" id="k">Header</label>
    <input type="text" class="form-control" name="header" id="field1" placeholder="Insert header">
  </div>
  
  <div class="container py-2">
   <div class="row">
       <div class="col-4">
     
       </div>
   </div>
</div>
  <div class="form-group">
    <label for="field1" id="k">Blog category</label></br>
   <select class="browser-default custom-select" name="category" id="field1">
 <option selected>Select Category</option>
 <option  value="International">International</option>
 <option  value="Tours and Travel">Tours and Travels</option>
 <option value="Cooking Tips">Cooking Tips</option>
</select>
  </div>
  </br>
  </br>
  <div class="form-group">
   <!-- <label for="field1">Photo</label> -->
   <input type="file" name="photo" id="file" >
  </div>
  <div class="form-group">
    <label for="text">Text</label> 
    <textarea class="form-control" name="text" id="text" placeholder="Введите данные"></textarea>
   </div>
   <div class="form-group">
    <label for="field1">Video Link</label>
    <input type="text" class="form-control" name="link" id="field1" placeholder="example: https://www.youtube.com/watch?v=_xeVAjOCNzI">
  </div>
  <button type="submit" name='submit' class="btn btn-primary">Post</button>
</form>

</div> 

</div>     

 </body>

</html>