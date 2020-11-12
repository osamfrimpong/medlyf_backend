@extends('layouts.doc_dash')
@section('contents')
<div class="content">
    <!--  -->

    <!-- SCHEDULE ON DOCTOR DASHBOARD -->
    <div class="schedule">
       <div class="head3">Schedule (Kindly set profile before you proceed)</div>
    <form class="schedContent" method="POST" action="{{route('doctor.schedules.store')}}">
        @csrf
        <div>
       <label for="">Add available date:</label> <br>
       <input class="dte" type="date" name="date" id="" required>
       </div>

       <div>
       <label for="">Hospital name</label> <br> 
       <input class="dte" value="" name="hospital" required/><br> 
       </div>

       <div>
       <label for="">Hospital Location</label> <br> 
       <input class="dte" value="" name="location" required /> <br> 
       </div>

       <div>
           <label for="">Your Specialty</label> <br>
           <select class="dte" name="specialty" required>
               <!-- <input type="radio" name="" id="">Heart</input> -->
               <option value="" name="Heart">Select Specialty</option>
               <option value="heart" name="Heart">Heart</option>
               <option value="teeth" name="Teeth">Teeth</option>
               <option value="eye" name="Eye">Eye</option>
               <option value="bones" name="Bones">Bones</option>
               <option value="gyne" name="Gynecologist">Gynecologist</option>
               <option value="children" name="Children">Children</option>
               <option value="kidney" name="Kidney">Kidney</option>
           </select>

       </div>


       <div>
       <label for=""> Select Region</label> <br>
       <select class="dte" style="margin-left: 2px;" name="region" required>
           <option value="" name="Cardiologist">Select Region</option>
           <option value="ahafo" name="Cardiologist">Ahafo Region</option>
           <option value="ashanti" name="Cardiologist">Ashanti Region</option>
           <option value="bono" name="Cardiologist">Bono Region</option>
           <option value="bono-east" name="Cardiologist">Bono East</option>
           <option value="central" name="Cardiologist">CentralRegion</option>
           <option value="eastern" name="Cardiologist">Eastern Region</option>
           <option value="accra" name="Cardiologist">Greater Accra</option>
           <option value="nothern" name="Cardiologist">Northern</option>
           <option value="north-east" name="Cardiologist">North East</option>
           <option value="oti" name="Cardiologist">Oti Region</option>
           <option value="savannah" name="Cardiologist">Savannah Region</option>
           <option value="upper-east" name="Cardiologist">Upper East</option>
           <option value="upper-west" name="Cardiologist">Upper West</option>
           <option value="volta" name="Cardiologist">Volta Region</option>
           <option value="western" name="Cardiologist">Western Region</option>
           <option value="west-north" name="Cardiologist">Western North</option>
       
       </select> 
       </div>

       <input type="submit" class="sub-btn" value="Save">
    </form>


       </div>

       <!-- ADDED HOSPITALS -->

       <div>
           <span></span>
           <table>
               <thead>
                   <tr class="table100-head">
                       <th class="column1">No.</th>
                       <th class="column2">Hospital</th>
                       <th class="column3">Date</th>
                       <th class="column4">Location</th>
                       <th class="column5"></th>
                       <th class="column5"></th>
           
                   </tr>
               </thead>
               <tbody>
           @forelse ($schedules as $schedule)
           <tr>
            <td class="column1">1</td>
           <td class="column2">{{$schedule->hospital}}</td>
            <td class="column3">{{$schedule->date}}</td>
            <td class="column4">{{$schedule->location}}</td>
           <td class="column5"><form action="{{route('doctor.schedules.edit',$schedule->id)}}" method="GET"><button id="" class="act" type="submit">Edit</button></form></td>
            <td class="column6">
            <form action="{{route('doctor.schedules.destroy',$schedule->id)}}" method="post">@method('DELETE')@csrf<button id="" class="act" type="submit">Delete</button></form></td>
            
        </tr>
           @empty
           <tr>
            <td class="column1" colspan="5">No Schedules</td>
            
        </tr>               
           @endforelse

               </tbody>
           </table>
       </div>
</div>

@endsection