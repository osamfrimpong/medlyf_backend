<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medlyf | Home</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/searchDoc.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   
  </head>
  <body>
      <!-- NAVIGATION BAR -->
    <div class="navbar">
        <a href="{{route('index')}}"> <img src="{{asset('images/logo.png')}}" alt="medlyf logo" class="logo" /></a>
      <label for="toggle" class="hamburger">&#9776;</label>
      <input type="checkbox" id="toggle"/>

      <div class="menu">
          <a href="{{route('index')}}">Home</a>
      <a href="{{route('search_doc')}}">Doctors</a>
          <a href="{{route('pharmacy')}}">Pharmacy</a>
      <a href="{{route('lab')}}">Laboratory</a>
      <a href="{{route('login')}}" class="sub-banner-button">Login/Sign Up</a>
      </div>

    </div>
        <!--FRONT BANNER  -->
<!-- @yield('contents') -->
        <!-- FOOTER -->
        
    </div>




    <script src="https://kit.fontawesome.com/4c3d866c75.js" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('javascript/login.js')}}"></script>
    <script src="{{asset('javascript/popupmodal.js')}}"></script>
  </body>
</html>
