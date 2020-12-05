<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/Admindashboard.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" />

</head>

<body>
    <!-- NAVIGATION BAR -->
    <div class="navbar">
        <a href="index.html"> <img src="/images/logo.png" alt="medlyf logo" class="logo" /></a>
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
            <div class="title">ADMINISTRATOR</div>
            <div class="profile-pic"><img src="{{auth()->user()->profile_picture == "" ? "" : asset(Storage::url(auth()->user()->profile_picture))}}" alt="" height="70" width="70"></div>
            <h4 id="">{{auth()->user()->last_name}} {{auth()->user()->first_name}}</h4>

            <ul class="list-items">
                <li style="background: #f97efd;"><a href="{{route('administrator.home')}}"><i class="fas fa-user"></i>Home</a></li>
                <li><a href="{{route('administrator.doctors')}}"><i class="fas fa-stream"></i>Doctors</a></li>
                <li><a href="{{route('administrator.patients')}}"><i class="fas fa-address-book"></i>Patients</a></li>
                <li><a href="{{route('administrator.appoints')}}"><i class="fas fa-address-book"></i>Appointments</a></li>
                <li><a href="{{route('administrator.settings')}}"><i class="fas fa-cog"></i>Settings</a></li>
                <li><a href="{{route('administrator.logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>

            </ul>
        </nav>
    </div>

    @yield('contents')




    <script src="https://kit.fontawesome.com/4c3d866c75.js" crossorigin="anonymous"></script>

    </body>
</html>