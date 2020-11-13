@extends('layouts.doc_dash')

@section('contents')
<div class="content">

    <div class="settings">
            <div class="head5">Settings</div>
            
                <div class="basic-info">
                    <div class="sub-head1">Change password</div>

                    <form action="{{route('doctor.settings.update')}}" method="post">
                        @csrf 
                    <label for="">E-mail</label> <br>
                    <input class="profile-input" type="email" placeholder="type your email" name="email" value="{{$user->email}}" required> <br>
                    <label for="">Old password</label> 
                    <input class="profile-input" type="password" name="old_password" placeholder="type old password"> <br>
                    <label for="">New password</label>
                    <input class="profile-input" name="new_password" type="password" placeholder="type new password">
                    <label for="">Confirm Password</label>
                    <input class="profile-input" type="password" placeholder="type new password again" name="new_password_confirmation">
                    <input class="save-btn1" type="submit" value="Save changes">
                    </form>
                </div>


    </div>

    
</div>
   

@endsection