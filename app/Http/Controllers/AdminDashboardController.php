<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('admin.home');
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
