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
            <form class="register-form" method="POST">
                @csrf
                <h2 style="padding: 20px;">FOR PATIENTS</h2>
                <input type="text" placeholder="First name" required />
                <input type="text" placeholder="Last name" required />
                <input type="text" placeholder="Email address" />
                <input type="tel" placeholder="Mobile number" required/>
                <input type="password" placeholder="Password" required/>
                <div>
                    <input type="checkbox" required>Agree to
                    <a href="terms.html">Terms & condition </a> and <a href="privpolicy.html">Privacy Policy</a>
                </div>
                <button>create</button>

                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>

            <!-- LOGIN PATIENT -->
            <form class="login-form">
                <h2 style="padding: 20px;">FOR PATIENTS</h2>
                <input type="tel" placeholder="Mobile number" required/>
                <input type="password" placeholder="Password" required/>
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
            <div class="whichUser">
                <a href="{{route('doctor_login')}}" class="changingUser">I am a Doctor</a> 
            </div>

        </div>
        
    </div>

@endsection