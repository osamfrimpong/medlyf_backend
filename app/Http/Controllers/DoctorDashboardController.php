<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorDashboardController extends Controller
{
    public function index(){
        $schedules = Schedule::where('doctor_id',Auth::user()->id)->get();
        $bookings = Booking::where('doctor_id',Auth::user()->id)->get();
        return view('doctor.home',compact('schedules','bookings'));
    }

    public function profile(){}

    public function settings(){}

    public function problem(){}

    public function logOut(){
        Auth::logout();
        return redirect()->route('doctor_login');
    }
}
