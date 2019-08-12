<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Task extends Model
{
    public static  function incomplete(){
        return static::where('completed',0)->get();
    }
    public static function selectuser(){
        return static::where('id',2)->get();
    }

}
