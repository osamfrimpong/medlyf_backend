@extends('layouts.front')
@section('contents')
<header class="headings">
    <p>FIND THE NEAREST PHARMACY</p>
</header>

<!-- MAIN PAGE -->
<div class="pharm">
    <input id="pac-input" class="controls" type="text" placeholder="Search Box" />
    <div id="map"></div>

</div>
@endsection