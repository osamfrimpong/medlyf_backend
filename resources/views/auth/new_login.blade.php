@extends('layouts.front')

@section('contents')
    
    <!-- BANNER -->
    <header class="headings">
        <p>LOGIN OR SIGN UP FOR PATIENTS</p>
    </header>

    <!-- MAIN PAGE -->
    <div class="loginback">
        <div class="form">
            <!-- SIGN UP PATIENT-->
        <form class="register-form" method="POST" action="{{route('register')}}">
                @csrf
                <h2 style="padding: 20px;">FOR PATIENTS</h2>
                <input type="text" placeholder="First name" name="first_name" required />
                <input type="hidden" name="user_type" value="0">
                <input type="text" placeholder="Last name" name="last_name" required />
                <input type="text" placeholder="Email address" name="email"/>
                <input type="tel" placeholder="Mobile number" required name="phone"/>
                <input type="password" name="password" placeholder="Password" required/>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required/>
                <div>
                    <input type="checkbox" required>Agree to
                <a href="{{route('terms')}}">Terms & condition </a> and <a href="{{route('privacy')}}">Privacy Policy</a>
                </div>
                <button type="submit">create</button>

                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>

            <!-- LOGIN PATIENT -->
            <form class="login-form" method="POST" action="{{route('login')}}">
                @csrf
                <h2 style="padding: 20px;">FOR PATIENTS</h2>
                <input type="tel" placeholder="Mobile number" required name="phone"/>
                <input type="password" name="password" placeholder="Password" required/>
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
            <div class="whichUser">
                <a href="{{route('doctor_login')}}" class="changingUser">I am a Doctor</a> 
            </div>

        </div>
        
    </div>

@endsection