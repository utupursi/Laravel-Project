<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class DeleteblogController extends Controller
{
  
  
    public static function deleteblog($id){
        DB::delete('delete from blogs where blog_id = ?',[$id]);
    return redirect('viewblogs');
        
    }
     
}
