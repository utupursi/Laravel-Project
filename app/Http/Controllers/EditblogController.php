<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class EditblogController extends Controller
{
  
    public static function insertblog(Request $request){
        $header = $request->input('header');
        $category = $request->input('category');
        $photo=$request->file('photo')->store('uploads','public');
        $video=$request->file('video')->store('uploads','public');
        $text = $request->input('text');
        $blog_id = $request->input('id');
        $user_id = Auth::user()->id;
        $data=array('header'=>$header,'category'=>$category,'photo'=>$photo,'text'=>$text,'link'=>$video,'user_id'=>$user_id);
        DB::table('blogs')->where('blog_id',$blog_id)->update($data);
        return redirect('/');
    }
    public static function blogs($id){
            $blogs=DB::table('blogs')
            ->where('blog_id','=',$id)
            ->get();
            return view('editblog',compact('blogs'));
        
    }
     
}
