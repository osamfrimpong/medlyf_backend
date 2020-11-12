<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
