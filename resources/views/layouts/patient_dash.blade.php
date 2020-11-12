<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />

</head>
<body>
    <!-- NAVIGATION BAR -->
<div class="navbar">
    <a href="index.html"> <img src="{{asset('images/logo.png')}}" alt="medlyf logo" class="logo" /></a>
    <label for="toggle" class="hamburger">&#9776;</label>
    <input type="checkbox" id="toggle" />

    <div class="menu">
        <img class="" src="" alt="">
    </div>

</div>

    <!-- SIDEBAR -->

<div class="wrapper">
    <input type="checkbox" id="btn" hidden>
    <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </label>
    <nav id="sidebar">
        <div class="title">DASHBOARD</div>
        <div class="profile-pic"><img src="" alt="" ></div>
    <p id=" ">Dr. {{auth()->user()->last_name}} {{auth()->user()->first_name}}</p>
    <ul class="list-items">
        <li><a href="{{route('patient.home')}}"><i class="fas fa-user"></i>Appointments</a></li>
        <li><a href="{{route('search_doc')}}"><i class="fas fa-user"></i>Book</a></li>
        <li><a href="{{route('patient.updates')}}"><i class="fas fa-stream"></i>Updates</a></li>
        <li><a href="{{route('patient.profile')}}"><i class="fas fa-address-book"></i>Profile</a></li>
            <li><a href="{{route('patient.settings')}}"><i class="fas fa-cog"></i>Settings</a></li>
            <li><a href="{{route('patient.problem')}}"><i class="fas fa-envelope"></i>Report a problem</a></li>
        <li><a href="{{route('patient.logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
    </ul>
    </nav>
</div>

@yield('contents')
   



        <script src="https://kit.fontawesome.com/4c3d866c75.js" crossorigin="anonymous"></script>
        <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</body>
</html>