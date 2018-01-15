<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //
    public function index(){
        $d = DB::table('accounts')->get();
//        dd($d);

        $dd=DB::table('jobs')->skip(2)->take(1)->orderBy('id','desc')->get();
        dd($dd);
    }
}
