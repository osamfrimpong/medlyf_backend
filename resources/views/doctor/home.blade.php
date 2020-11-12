@extends('layouts.doc_dash')

@section('contents')
    <!-- DASHBOARD CONTENT -->
<div class="content">
    <div class="home">
       <div class="heads">Home</div>
       <!-- TODAY BOOKING -->
       <div class="booknum" id="">
           <div class="sub-head">Today's Appointments</div>
           <p class="nums">15</p>
       </div>

       <!-- UPCOMING BOOKING -->
       <div class="booknum" id="">
           <div class="sub-head">Upcoming Appointments</div>
           <p class="nums">23</p>
       </div>

       <!-- TOTAL BOOKING -->
       <div class="booknum" id="">
           <div class="sub-head">All Appointments</div>
           <p class="nums">{{$bookings->count()}}</p>
       </div>
    </div>

    <div class="clients">
       <div class="head2">Clients</div>
       <table>
           <thead>
               <tr class="table100-head">
                   <th class="column1">Date</th>
                   <th class="column2">Client ID</th>
                   <th class="column3">Name</th>
                   <th class="column4">Age</th>
                   <th class="column5">Hospital</th>
                   <th class="column6">Appt. Date</th>
               </tr>
           </thead>
           <tbody>
              
              @forelse ($bookings as $booking)
              <tr>
              <td class="column1">{{$booking->created_at}}</td>
                <td class="column2">{{$booking->patient->id}}</td>
                <td class="column3">{{$booking->patient->first_name}} {{$booking->patient->last_name}}</td>
                <td class="column4">30</td>
                <td class="column5">{{$booking->schedule->hospital}}</td>
                <td class="column6">{{$booking->schedule->date}}</td>
            </tr>
              @empty
                  
              @endforelse

           
              

       
           </tbody>
       </table>
    </div>

  
   
</div>
@endsection