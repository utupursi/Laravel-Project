
<style>
#p{
    width:150px;
    height:150px;
}

</style>
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    <div class="row m-y-2">
        <!-- edit form column -->
        <div class="col-lg-4 text-lg-center">
            <h2>Edit Profile</h2>
        </div>
        <div class="col-lg-8">
     
        </div>
        <div class="col-lg-8 push-lg-4 personal-info">
             <form role="form" method="post" enctype="multipart/form-data" action="{{ url('/edituser') }}" >
             {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email"name="email" value="{{Auth::user()->email}}" />
                    </div>
                </div>
           
    
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">City</label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" name="city" value="{{Auth::user()->city}}"/>
                    </div>
                    
            
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel" />
                        <input type="submit" class="btn btn-primary" value="Save Changes" />
                    </div>
                </div>
         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- <div class="col-lg-4 pull-lg-8 text-xs-center">
                <img src= id="p" class="m-x-auto img-fluid img-circle" alt="avatar" />
                <h6 class="m-t-2">Upload a different photo</h6>
                <label class="custom-file">
                  <input type="file" name="photo" id="file" class="custom-file-input" onchange="readURL(this);" >

                  <span class="custom-file-control">Choose file</span>
                </label>
                </form>
        </div> -->

    </div>
</div>

<hr />
@endsection
<script>     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#p')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
 </script>
