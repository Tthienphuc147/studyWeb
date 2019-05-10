<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome(){
        $lophoc='App\lophoc'::get();
        return view('page.home')->with('datalophoc',$lophoc);
    }

}
