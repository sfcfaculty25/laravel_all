<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index()
    {
      $products=  DB::table('product')->get();
//,['products'=>$products]
        return view('layouts.index',['products'=>$products]);
    }


}
