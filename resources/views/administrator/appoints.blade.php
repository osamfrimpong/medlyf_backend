@extends('layouts.admin_dash')
@section('contents')
 
 <!-- DASHBOARD CONTENT -->
 <div class="content">
        <div class="home">
            <div class="heads">Appointments</div>
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
                <p class="nums">100</p>
            </div>
        </div>


        <!-- PAST APPOINTMENTS -->
        <div class="clients">
            <div class="head2">Today</div>
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">Date</th>
                        <th class="column2">Specialty</th>
                        <th class="column3">Client's Name</th>
                        <th class="column4">Doctor's Name</th>
                        <th class="column5">Hospital</th>
                        <th class="column6">Appt. Date</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">Heart</td>
                        <td class="column3">Eric Tweneboah</td>
                        <td class="column4">Dr. Osam-Frimpong</td>
                        <td class="column5">Ho Teaching Hospital</td>
                        <td class="column6">01/10/2020</td>
                    </tr>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">Bones</td>
                        <td class="column3">Emmanuel Ansong</td>
                        <td class="column4">Dr. Alakwa</td>
                        <td class="column5">Eastern reg. Hospital</td>
                        <td class="column6">02/10/2020</td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>


                </tbody>
            </table>
        </div>

        <!-- UPCOMING APPOINTMENTS -->
        <div class="clients">
            <div class="head2">Upcoming</div>
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

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">00011</td>
                        <td class="column3">Eric Tweneboah</td>
                        <td class="column4">30</td>
                        <td class="column5">Ho Teaching Hospital</td>
                        <td class="column6">01/10/2020</td>
                    </tr>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">00023</td>
                        <td class="column3">Emmanuel Ansong</td>
                        <td class="column4">55</td>
                        <td class="column5">Akatsi District Hospital</td>
                        <td class="column6">02/10/2020</td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>
                    <tr>
                        <td class="column1"></td>
                        <td class="column2"></td>
                        <td class="column3"></td>
                        <td class="column4"></td>
                        <td class="column5"></td>
                        <td class="column6"></td>
                    </tr>


                </tbody>
            </table>
        </div>




    </div>

    @endsection