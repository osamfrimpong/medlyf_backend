@extends('layouts.doc_dash')
@section('contents')
<div class="content">


    <div class="problem" id="probs">
        <div class="head6">Report a problem</div>
            <div class="basic-info">
            <form class="" action="{{route('doctor.problem.store')}}" method="post">
                @csrf
                    <label for="">E-mail</label> <br>
            <input class="profile-input" value="{{auth()->user()->email}}" type="email" placeholder="type your email" name="email" required>

                    <label for="">Talk to us</label> <br>
                    <input class="profile-input" type="text" name="problem" placeholder="What's the problem" required>
              
                <input class="save-btn1" type="submit" value="Submit">
                </form>
            </div>

    </div>
</div>

@endsection