<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class ViewblogsController extends Controller
{
    public static function selectUserBlogs(){
        $blogs=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->where('id','=',Auth::user()->id)
        ->get();
        return view('viewblogs',compact('blogs'));
    
}
}
