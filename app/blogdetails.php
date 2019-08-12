<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class blogdetails extends Model
{
    public static function blogdetail($id){
    $blog=DB::table('blogs')
    ->join('users', 'blogs.user_id', '=', 'users.id')
    ->where('blog_id','=',$id)
    ->get();
    return $blog;
    }
}
