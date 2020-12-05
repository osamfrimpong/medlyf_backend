@extends('layouts.admin_dash')
@section('contents')

 <!-- DASHBOARD CONTENT -->
 <div class="content">
        <div class="home">
            <div class="heads">Doctors</div>
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

        <div class="clients">
            <div class="head2">Pending approvals</div>
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">Date</th>
                        <th class="column2">Tel. Number</th>
                        <th class="column3">Name</th>
                        <th class="column4">License Number</th>
                        <th class="column5">Approve</th>
                        <th class="column6">Decline</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">0543874598</td>
                        <td class="column3">Dr. Dankwah Doreen</td>
                        <td class="column4">MDC/RN/7989</td>
                        <td class="column5"><button id="" class="book-now1">Approve</button></td>
                        <td class="column6"><button id="" class="book-now2">Decline</button></td>
                    </tr>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">0201345432</td>
                        <td class="column3">Dr. Loglo Victor</td>
                        <td class="column4">MDC/RN/7995</td>
                        <td class="column5"><button id="" class="book-now1">Approve</button></td>
                        <td class="column6"><button id="" class="book-now2">Decline</button></td>
                    </tr>
                   


                </tbody>
            </table>
        </div>
        <!-- APPROVED DOCTORS -->
        <div class="clients">
            <div class="head2">Approved Doctors</div>
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">Date</th>
                        <th class="column2">Tel. Number</th>
                        <th class="column3">Name</th>
                        <th class="column4">License Number</th>
                        <th class="column5">Dashboard</th>
                        <th class="column6">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">0502657894</td>
                        <td class="column3">Dr. osam-frimpong</td>
                        <td class="column4">MDC/RN/7905</td>
                        <td class="column5"><button id="" class="book-now1">View Dashboard</button></td>
                        <td class="column6"><button id="" class="book-now2">Delete</button></td>
                    </tr>

                    <tr>
                        <td class="column1"></td>
                        <td class="column2">0245875692</td>
                        <td class="column3">Dr. Alakwa</td>
                        <td class="column4">MDC/RN/7975</td>
                        <td class="column5"><button id="" class="book-now1">View Dashboard</button></td>
                        <td class="column6"><button id="" class="book-now2">Delete</button></td>
                    </tr>
                   

                </tbody>
            </table>
        </div>

    </div>
    @endsection