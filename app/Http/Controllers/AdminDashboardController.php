<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        $totalDoctors = User::where('user_type',1)->get()->count();
        $totalPatients = User::where('user_type',0)->get()->count();
        $totalAppointments = Booking::all()->count();
        return view('admin.home', compact('totalDoctors','totalPatients','totalAppointments'));
    }

    public function doctors(){
        return view('admin.doctors');
    }

    public function appoints(){
        return view('admin.appoints');
    }

    public function patients(){
        return view('admin.patients');
    }

    public function settings(){
        return view('admin.settings');
    }
}
