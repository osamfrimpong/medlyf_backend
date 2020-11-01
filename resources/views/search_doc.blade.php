@extends('layouts.front')

@section('contents')
<header class="headings">
    <p>SEARCH DOCTOR</p>
</header>




<!-- MAIN PAGE -->
<div class="searchDoc">
    <!-- SEARCH PARAMETERS -->
    <div class="searchPara">
        <select class="specialists">
            <option value="" name="Heart">Select Specialty</option>
            <option value="" name="Heart">Heart</option>
            <option value="" name="Teeth">Teeth</option>
            <option value="" name="Eye">Eye</option>
            <option value="" name="Bones">Bones</option>
            <option value="" name="Gynecologist">Gynecologist</option>
            <option value="" name="Children">Children</option>
            <option value="" name="Kidney">Kidney</option>
        </select>

        <select class="specialists" style="margin-top: 5px;">
            <option value="" name="Cardiologist" >Select Region</option>
            <option value="" name="Cardiologist">Ahafo Region</option>
            <option value="" name="Cardiologist">Ashanti Region</option>
            <option value="" name="Cardiologist">Bono Region</option>
            <option value="" name="Cardiologist">Bono East</option>
            <option value="" name="Cardiologist">CentralRegion</option>
            <option value="" name="Cardiologist">Eastern Region</option>
            <option value="" name="Cardiologist">Greater Accra</option>
            <option value="" name="Cardiologist">Northern</option>
            <option value="" name="Cardiologist">North East</option>
            <option value="" name="Cardiologist">Oti Region</option>
            <option value="" name="Cardiologist">Savannah Region</option>
            <option value="" name="Cardiologist">Upper East</option>
            <option value="" name="Cardiologist">Upper West</option>
            <option value="" name="Cardiologist">Volta Region</option>
            <option value="" name="Cardiologist">Western Region</option>
            <option value="" name="Cardiologist">Western North</option>

        </select>

        <button class="specialists" type="submit" style="margin-top: 10px; background: green; color: white;">Search</button>
    </div>

    <!-- SEARCH RESULTS -->


    <div>

    </div>
    

</div>

@endsection