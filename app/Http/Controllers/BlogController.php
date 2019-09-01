<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App;
class BlogController extends Controller
{
    public static  function writeblog(){
        return view('blog');
    }

    public static function insert(Request $request){
        $photo=$request->file('photo')->store('uploads','public');
        $video=$request->file('video')->store('uploads','public');
        $header = $request->input('header');
        $category = $request->input('category');
        $text = $request->input('text');
        $user_id = Auth::user()->id;
        $data=array('header'=>$header,'category'=>$category,'photo'=>$photo,'text'=>$text,'link'=>$video,'user_id'=>$user_id);
        DB::table('blogs')->insert($data);
        return redirect('/');
    }

    
    public static function blogs(){
        $blogs=App\blog::joini();

        $blogs1=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->where('category','=','international')
        ->get();
        $blogs2=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->where('category','=','Cooking Tips')
        ->get();
        $blogs3=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->where('category','=','Tours And Travel')
        ->get();
        $number=count($blogs1);
        $number1=count($blogs2);
        $number2=count($blogs3);
        $data = array('blogs' => $blogs,
                   'number' => $number,
                   'number1'=>$number1,
                   'number2'=>$number2
                ); 
        return view('/welcome')->with($data);
    }
 
}
