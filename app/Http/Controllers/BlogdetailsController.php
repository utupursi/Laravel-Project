<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
class BlogdetailsController extends Controller
{
    public static  function blogdetails($id){
        $blog=App\blogdetails::blogdetail($id);
        return view('/blogdetails',compact('blog'));
    }
  
}
