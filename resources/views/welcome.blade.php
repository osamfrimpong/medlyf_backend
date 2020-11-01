@extends('layouts.front')

@section('contents')
    
<div class="banner">
    <p class="fronttext">Search
        <span style="font-weight: bold; font-size: 3rem; color: #000064"> Doctor </span>, Book a
        <span style="font-weight: bold; font-size: 3rem; color: rgb(0, 0, 100)">Specialist</span>
    </p>
    <p style="font-size: 2rem; text-align: center">
        Find the best Doctors, Specialists and Services without stress
    </p>


    <!-- INPUT FIELD -->
    <div style="text-align: center;">
            <input type="text" class="loc" placeholder="&#xf041; Enter location">
            <input type="text" class="search" placeholder="&#xf002; Search for Specialist, Pharmacy or lab.">
            <input type="button" class="submit" value="GO">
    </div>
    
        <!-- BOXES -->
    <div class="containers">
        <div class="box1"><a href="searchDoc.html" class="gridlink"> Click to Book Now</a></div>
        <div class="box2"><a href="#" class="gridlink">Find Nearest Pharmacy</a></div>
        <div class="box3"><a href="#" class="gridlink">Find Nearest Laboratory</a></div>
    
    </div>

    <!-- OUR SPECIALTIES -->
    <div class="specIcons">
        <p>Our Specialties</p>
        <div><img src="{{asset('images/heart.png')}}" alt="heart icon"> <br>Heart </div> 
        <div><img src="{{asset('images/gynae.png')}}" alt="gynae icon"> <br>Obs & Gynae  </div> 
        <div><img src="{{asset('images/kidney.png')}}" alt="kidney icon"><br>Kidney</div>
        <div><img src="{{asset('images/eye.png')}}" alt="eye icon"><br>Eye</div>
        <div><img src="{{asset('images/teeth.png')}}" alt="tooth"><br>Tooth</div>
        <div><img src="{{asset('images/child.png')}}" alt="child"><br>Children</div>
        <div><img src="{{asset('images/bones.png')}}" alt="bones"><br>Bone</div>
               
    </div>

    <h5 class="howhead">How It Works</h5>

    <!-- HOW IT WORKS -->
    <div class="how">
        <!-- <h3>How it works</h3> -->
        <div><img src="{{asset('images/login.png')}}" alt="login logo"> 
            <h3>Create account</h3>  <br>
        Enter first and last name, email, active moibile number and password to create account
        </div>
        <div><img src="{{asset('images/doctor.png')}}" alt="doc icon">
            <h3>Doctor search</h3> <br>
        Enter specialty (eg. dentist) and select region
        </div>
        <div><img src="{{asset('images/booking.png')}}" alt="booking icon">
            <h3>Booking</h3> <br>
        Choose day of appointment based on doctor's available day
        </div>
    
    </div>

@endsection