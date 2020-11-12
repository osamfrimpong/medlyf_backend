<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientDashboardController extends Controller
{
    public function index(){
        $appointments = Booking::where('patient_id',Auth::user()->id)->get();
        return view('patient.home',compact('appointments'));
    }

    public function profile(){}

    public function updates(){}

    public function problem(){}

    public function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function book($schedule_id){
        $schedule = Schedule::findOrFail($schedule_id);
        Booking::create(['schedule_id'=>$schedule_id,'patient_id'=>Auth::user()->id,'seen'=>0,'doctor_id'=>$schedule->doctor_id]);
        return redirect()->route('patient.home');

    }
}
