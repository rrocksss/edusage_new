<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(Request $request){
        $predictions = $request->session()->get('predictions');
        return view('result',[
            'predictions' => $predictions,
            'title' => 'Result'
        ]);
    }
}
