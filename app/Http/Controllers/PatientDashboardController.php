<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientDashboardController extends Controller
{
    public function appointments(){

    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }
}
