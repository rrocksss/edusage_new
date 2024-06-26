<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\major;
use App\Models\university_major_accreditation;

class RecommendationController extends Controller
{
    public function index(Request $request, $name){
        $majors = major::where('major_name', $name)->get();
        $accreditations = university_major_accreditation::where('major_id','=', $majors[0]->id)->get();
        return view('recommendation',[
            'accreditations' => $accreditations,
            'title' => 'Recommendation',
            'major_name' => $name
        ]);
    }
}
