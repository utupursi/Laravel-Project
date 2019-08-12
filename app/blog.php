<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public static function joini(){
        $blogs=DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->get();
        return $blogs;
        
    }
}
