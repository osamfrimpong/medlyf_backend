@extends('layouts.frontTopOnly')

<!-- @section('contents') -->
<header class="headings">
    <p>SEARCH DOCTOR</p>
</header>


  <!-- MAIN PAGE -->

        <!-- SEARCH PARAMETERS -->

        <div class="search-content">
            <div class="searchPara">
                <div class="filter-head">Search filter</div>
                <form method="POST" action="{{route('doctor.search')}}">
                    @csrf
                <select class="specialists" name="specialty" required>
                    <option value="" name="">Select Specialty</option>
                    <option value="heart" name="Heart">Heart</option>
                    <option value="teeth" name="Teeth">Teeth</option>
                    <option value="eye" name="Eye">Eye</option>
                    <option value="bones" name="Bones">Bones</option>
                    <option value="gyne" name="Gynecologist">Gynecologist</option>
                    <option value="children" name="Children">Children</option>
                    <option value="kidney" name="Kidney">Kidney</option>
                </select>
    
                <select class="specialists" style="margin-top: 5px;" name="region" required>
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
    
                <button class="specialists1" type="submit" >Search</button>
            </form>
            </div>
            
            
    
             <!-- SEARCH RESULTS -->
         <div class="search-results">
             <!-- THIS IS THE RESULT CONTENT -->
             @if(isset($results))
             @foreach ($results as $result)
             <div class="result-content" id="">
                <!-- THE RESULT CONTENT WILL SHOW THE PICTURE OF THE DOCTOR -->
                <!-- THE PICTURE HE/SHE UPLOADED ON HIS DASHBOARD -->
                <div class="image" id="">
                    <img src="{{$result->doctor->profile_picture == "" ? "" : asset(Storage::url($result->doctor->profile_picture))}}" alt="" height="50" width="50">
                </div>
   
                <!-- IT WILL ALSO SHOW DETAILS OF HIS NAME, SPECIALTY, HOSPITAL AND LOCATION -->
                <div class="result-details">
                    <h4 id="">Dr. {{$result->doctor->last_name}} {{$result->doctor->first_name}} ({{$result->doctor_count}})</h4>
                    <h5>{{ucwords($result->specialty)}} specialist</h5>
                   
                </div>
   
                <!-- THIS BUTTON SHOULD SEND THE BOOKING TO THE PATIENTS DASHBOARD AND DOCTORS DASHBOARD -->
            <a class="book" href="{{route('doctor.details',$result->doctor_id)}}">Details</a>
          
           </div>
             @endforeach
            @endif
            </div>
    
                
        </div>
    
    </div>

<!-- @endsection -->