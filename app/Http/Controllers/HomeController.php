<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function searchDoctor(Request $request)
    {
        $specialty = $request->specialty;
        $region = $request->region;

        $results = Schedule::select("*", DB::raw("count(*) as doctor_count"))->where('region',$region)->where('specialty',$specialty)->groupBy('doctor_id')->get();
        return view('search_doc',compact('results'));
    }

    public function details($doctor_id){
        $details = Schedule::where('doctor_id',$doctor_id)->get();
        return view('doctor_details',compact('details'));
    }
}
