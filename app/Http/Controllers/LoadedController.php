<?php

namespace App\Http\Controllers;

class LoadedController extends Controller
{
    public function loaded(){
        return view('loaded',[
            'title' => 'Loaded'
        ]);
    }
}
