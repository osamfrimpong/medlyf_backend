@extends('layouts.admin_dash')
@section('contents')

 <!-- DASHBOARD CONTENT -->
 <div class="content">


<div class="settings">
    <div class="head5">
        <p>Settings</p>
    </div>

    <div class="basic-info">
        <div class="sub-head1">Change password</div>

        <form action="" method="post">
            <label for="">E-mail</label> <br>
            <input class="profile-input" type="email" placeholder="type your email" required> <br>
            <label for="">Old password</label>
            <input class="profile-input" type="email" placeholder="type old password" required> <br>
            <label for="">New password</label>
            <input class="profile-input" type="email" placeholder="type new password" required>
            <label for="">Confirm Password</label>
            <input class="profile-input" type="email" placeholder="re-type new password" required>
            <input class="save-btn1" type="button" value="Save changes">
        </form>
    </div>


</div>


</div>
@endsection