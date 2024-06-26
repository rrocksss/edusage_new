<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $request->session()->flush();
        return view('home',[
            'title' => 'Home'
        ]);
    }

}
