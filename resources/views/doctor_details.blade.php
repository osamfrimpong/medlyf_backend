@extends('layouts.frontTopOnly')

<!-- @section('contents') -->
<div class="scedule-table">
    <table>
        <thead>
            <tr class="table100-head">
                <th class="column1">No.</th>
                <th class="column2">Hospital</th>
                <th class="column3">Date</th>
                <th class="column4">Location</th>
                <th class="column5">Book</th>
         
            </tr>
        </thead>
        <tbody>
    @forelse ($details as $detail)
    <tr>
        <td class="column1">1</td>
        <td class="column2">{{$detail->hospital}}</td>
        <td class="column3">{{$detail->date}}</td>
        <td class="column4">{{$detail->location}}</td>
        <td class="column5"><a href="{{route('patient.book',$detail->id)}}">Book Now</a></td>
      
    </tr>
    @empty
        
    @endforelse
           
    
    
        </tbody>
    </table>
</div>
<!-- @endsection -->