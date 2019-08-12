<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class EdituserController extends Controller
{
    public static  function edituser(){
        return view('edituser');
    }
    public static function updateuser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $city = $request->input('city');
        $user_id=Auth::user()->id;
        $data=array('name'=>$name,'email'=>$email,'city'=>$city);
        DB::table('users')->where('id',$user_id)->update($data);
        return redirect('/userdetail');
    }


}
