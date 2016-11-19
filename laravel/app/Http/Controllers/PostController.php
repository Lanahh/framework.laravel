<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = ['name'=>'marie', 'email' => 'marie@humber.ca'];
        $id = 4;
//3 kieu return sau deu duoc
//        return view('pages.home', compact('id','data'));
//        return view('pages.home',['data' => $data,'id' => $id]);
        return view('pages.home')->with('data', $data)
                                 ->with('id', $id);
    }
}
