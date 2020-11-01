@extends('layouts.front')

@section('contents')
        <!-- BANNER -->
        <header class="headings">
            <p>LOGIN OR SIGN UP FOR DOCTOR</p>
        </header>
    
        <!-- MAIN PAGE -->
        <div class="loginback">
    
            <!-- DOCTORS LOGIN AND SIGN UP -->
            <div class="form">
                <form class="register-form">
                    <h2 style="padding: 20px;">FOR DOCTORS</h2>
                    <input type="text" placeholder="First name" required />
                    <input type="text" placeholder="Last name"  required/>
                    <input type="text" placeholder="Unique ID" required/>
                    <input type="text" placeholder="Email address" required />
                    <input type="num" placeholder="Mobile number" pattern="[0-9]{10}" maxlength="10" required/>
                    <input type="password" placeholder="Password" required/>
                    <div>
                    <input type="checkbox" required>Agree to 
                        <a href="terms.html">Terms & condition </a> and <a href="privpolicy.html">Privacy Policy</a>
                    </div>
                    <button type="submit">create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form class="login-form">
                    <h2 style="padding: 20px;">FOR DOCTORS</h2>
                    <input type="tel" placeholder="Mobile number" required/>
                    <input type="password" placeholder="Password" required/>
                    <button type="submit">login</button>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
    
                <div class="whichUser">
                <a href="{{route('login')}}" class="changingUser">I am a Patient</a>
                </div>
            </div>
        </div>
    
@endsection