<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome(){
        $lophoc='App\lophoc'::get()->toArray();
        return view('page.home')->with('datalophoc',$lophoc);
    }

}
