<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientDashboardController extends Controller
{
    public function index(){
        $appointments = Booking::where('patient_id',Auth::user()->id)->get();
        return view('patient.home',compact('appointments'));
    }

    public function profile(){$user = Auth::user();
        return view('patient.profile',compact('user'));}


    public function updateProfile(Request $request){
        $data = $request->all();
        if($request->hasFile('picture'))
        {
        $data['profile_picture'] = $request->file('picture')->store('public/patients');}
        else
        {
            $data['profile_picture'] = Auth::user()->profile_picture;
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->fill($data)->save();
        return redirect()->route('patient.profile');
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
        return redirect()->route('patient.settings');
    }

    

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
