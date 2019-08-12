<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserdetailController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
public static  function detail(){
    return view('userdetail');
}


}
