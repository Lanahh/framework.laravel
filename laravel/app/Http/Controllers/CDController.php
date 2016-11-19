<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cd;

class CDController extends Controller
{
    //
    public function index(){
        $cds = Cd::all();

        return view('cd.list')->with('cds',$cds);
    }
}
