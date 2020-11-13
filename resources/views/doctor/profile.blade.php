@extends('layouts.doc_dash')
@section('contents')
    <!-- DASHBOARD CONTENT -->
<div class="content">
     
    <div class="profile">
     <div class="head4"><p>Profile</p> </div>
    <form action="{{route('doctor.profile.update')}}" method="POST" class="basic-info1" enctype="multipart/form-data">
                @csrf
                <div>
                <label for="">First name:</label><br>
                <input class="profile-input" type="text" name="first_name" value="{{$user->first_name}}" required>
                </div>

                <div>
                <label for="">Last name:</label> <br>
                <input class="profile-input" type="text"  name="last_name" value="{{$user->last_name}}" required>
                </div>

                <div>
                <label for="">Physician Licence Number:</label> <br>
                <input class="profile-input" type="text" name="license" value="{{$user->license}}" required>
                </div>

                <div>
                    <label for="">Residential address:</label> <br>
                    <input class="profile-input" type="text" name="residential" value="{{$user->residential}}" required>
                </div>

                <div>
                    <label for="">Insert profile picture:</label> <br>
                    <input class="profile-input" type="file" name="picture">
                </div>
                
                <div>
                <label for="dob">Date of birth:</label> <br>
                <input class="profile-input" type="date" id="dob" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                </div>
                
                <div>
                <label for="sex"> Sex:</label> <br>
                <select class="profile-input" id="sex" name="sex" required>
                    <option value="male" {{$user->sex == 'male'?'selected':''}}>Male</option>
                    <option value="female" {{$user->sex == 'female'?'selected':''}}>Female</option>
                </select>
                </div>

                <div class="about-me">
                
                    <label for="">About me</label><br>
                    <textarea class="" name="about" id="" cols="16" rows="3"
                placeholder="Write something about yourself....">{{$user->about}}</textarea>
                </div>
                    
                    <input class="save-btn" type="submit" value="Save">
                
                    



            </form>

            


    </div>

    
</div>
   
@endsection