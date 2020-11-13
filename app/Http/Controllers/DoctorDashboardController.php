<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function profile(){
        $user = Auth::user();
        return view('doctor.profile',compact('user'));
    }

    public function updateProfile(Request $request){
        $data = $request->all();
        if($request->hasFile('picture'))
        {
        $data['profile_picture'] = $request->file('picture')->store('public/doctors');}
        else
        {
            $data['profile_picture'] = Auth::user()->profile_picture;
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->fill($data)->save();
        return redirect()->route('doctor.profile');
    }

    public function settings(){}

    public function problem(){}

    public function logOut(){
        Auth::logout();
        return redirect()->route('doctor_login');
    }
}
