<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class UserprofileController extends Controller
{
    public static function userprofile($id){
        $user_info=DB::table('users')
        ->where('id','=',$id)
        ->get();
        return view('userprofile',compact('user_info'));
    
}
}
