<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorDashboardController extends Controller
{
    public function index(){
        $schedules = Schedule::where('doctor_id',Auth::user()->id)->get();
        $bookings = Booking::where('doctor_id',Auth::user()->id)->get();
        $upcoming = Booking::where('doctor_id',Auth::user()->id)->where('date','>=',Carbon::now())->get();
        $today = Booking::where('doctor_id',Auth::user()->id)->where('date',Carbon::today())->get();
        
        return view('doctor.home',compact('schedules','bookings','upcoming','today'));
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

    

    public function settings(){
        $user = Auth::user();
        return view('patient.settings',compact('user'));
    }

    public function updateSettings(Request $request){
        $data = $request->all();
        $user = User::findOrFail(Auth::user()->id);
        if($request->has('old_password') || $request->has('new_password') || $request->has('new_password_confirm')){

            $request->validate(['new_password' => 'required|string|confirmed']);
            $request->validate(['old_password' => 'required|string']);

           if(Hash::check($request->old_password,$user->password))
           {
            $data['password'] = Hash::make($request->new_password);
           }
           
        }

        
        $user->update($data);
        return redirect()->route('doctor.settings');
    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('doctor_login');
    }
}
