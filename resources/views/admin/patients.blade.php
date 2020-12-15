@extends('layouts.admin_dash')
@section('contents')

  <!-- DASHBOARD CONTENT -->
  <div class="content">

<form class="searching" action="">
    <input class="input-search1" type="text" placeholder="Type patient's name">
    <input class="input-button" type="button" value="search">
    <!-- <input class="input-btn" type="button" value=""> -->
</form>
<div class="search-head">Search results</div>
<div class="search-outcome">
    <table>
        <thead>
            <tr class="table100-head">
                <th class="column1">Date</th>
                <th class="column2">Tel. Number</th>
                <th class="column3">Name</th>
                <th class="column4">Age</th>
                <th class="column5">Dashboard</th>
                <th class="column6">Delete</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="column1"></td>
                <td class="column2">0241773287</td>
                <td class="column3">Eric Tweneboah</td>
                <td class="column4">30</td>
                <td class="column5"><button id="" class="book-now1">View Dashboard</button></td>
                <td class="column6"><button id="" class="book-now2">Delete</button></td>
            </tr>


        </tbody>
    </table>
</div>
</div>

<div class="content1">
<div class="clients">
    <div class="head2">Clients</div>
    <table>
        <thead>
            <tr class="table100-head">
                <th class="column1">Date</th>
                <th class="column2">Tel. Number</th>
                <th class="column3">Name</th>
                <th class="column4">Age</th>
                <th class="column5">Dashboard</th>
                <th class="column6">Delete</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="column1"></td>
                <td class="column2">0241773287</td>
                <td class="column3">Eric Tweneboah</td>
                <td class="column4">30</td>
                <td class="column5"><button id="" class="book-now1">View Dashboard</button></td>
                <td class="column6"><button id="" class="book-now2">Delete</button></td>
            </tr>

            <tr>
                <td class="column1"></td>
                <td class="column2">0542345323</td>
                <td class="column3">Emmanuel Ansong</td>
                <td class="column4">55</td>
                <td class="column5"><button id="" class="book-now1">View Dashboard</button></td>
                <td class="column6"><button id="" class="book-now2">Delete</button></td>
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