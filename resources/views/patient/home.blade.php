@extends('layouts.patient_dash')

@section('contents')
    <!-- DASHBOARD CONTENT -->
<div class="content">

    <div class="docs">
       <div class="head2">My Appointments</div>
       <table>
           <thead>
               <tr class="table100-head">
                   <th class="column1">Date</th>
                   <th class="column2">Dr Name</th>
                   <th class="column3">Hospital</th>
                   <th class="column4">Location</th>
                   <th class="column5">Specialty</th>
                   <th class="column6">Appt. Date</th>
               </tr>
           </thead>
           <tbody>
              
              @forelse ($appointments as $appointment)
              <tr>
                <td class="column1">{{$appointment->created_at}}</td>
                <td class="column2">Dr. {{$appointment->doctor->last_name}}</td>
                <td class="column3">{{$appointment->schedule->hospital}}</td>
                <td class="column4">{{$appointment->schedule->location}}</td>
                <td class="column5">{{$appointment->schedule->specialty}}</td>
                <td class="column6">{{$appointment->date}}</td>
            </tr>
              @empty
                  <td colspan="6">No appointments</td>
              @endforelse

              
              

       
           </tbody>
       </table>
    </div>

    <!-- BOOKING UPDATES ON PATIENT'S DASHBOARD -->
    <div class="booking-updates">
       <div class="head3">Booking Updates</div>
    <div class="updateContent">
       <p>No new Updates</p>
    </div>

   </div>
</div>

   
</div>
@endsection