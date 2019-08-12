<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class CategoryController extends Controller
{
    public static function selectInternational($category){
        $blogs=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->where('category','=',$category)
        ->get();
        return view('international',compact('blogs'));
    
}
public static function selectCookingTips($category){
    $blogs=DB::table('blogs')
    ->join('users', 'blogs.user_id', '=', 'users.id')
    ->where('category','=',$category)
    ->get();
    return view('CookingTips',compact('blogs'));

}
public static function selectToursAndTravels($category){
    $blogs=DB::table('blogs')
    ->join('users', 'blogs.user_id', '=', 'users.id')
    ->where('category','=',$category)
    ->get();
    return view('ToursAndTravels',compact('blogs'));

}

}
