@extends('layouts.admin_dash')
@section('contents')

    <!-- DASHBOARD CONTENT -->
    <div class="content">
        <div class="home">
            <div class="heads">Home</div>
            <!-- TODAY BOOKING -->
            <div class="booknum" id="">
                <div class="sub-head">Total Doctors</div>
                <p class="nums">{{$totalDoctors}}</p>
            </div>

            <!-- UPCOMING BOOKING -->
            <div class="booknum" id="">
                <div class="sub-head">Total Patients</div>
                <p class="nums">{{$totalPatients}}</p>
            </div>

            <!-- TOTAL BOOKING -->
            <div class="booknum" id="">
                <div class="sub-head">All Appointments</div>
                <p class="nums">{{$totalAppointments}}</p>
            </div>
     </div>

       



    </div>
    @endsection