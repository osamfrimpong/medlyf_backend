<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medlyf | Home</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" />


   
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
@yield('contents')
        <!-- FOOTER -->
        <div class="footer">
            <!-- ABOUT AND CONTACT -->
            <div>
            <label for="footerHead" class="footerTitle"><span>MEDLYF</span></label>
            <!-- <input type="checkbox" id="footerHead" class="footerCheckbox" /> -->
            <span class="footerContent">
                <a href="#">About Us </a>
                <a href="#">contact Us</a>
            </span>
            </div>

            <!-- OTHERS -->
            <div class="footerBox">
                <label for="footerHead2" class="footerTitle"><span>OTHERS</span></label>
                <span class="footerContent">
                    <a href="#">Health community</a>
                    <a href="#">Health topics</a>
                </span>
            </div>

            <!-- LEGAL -->
            <div>
                <label for="footerHead3" class="footerTitle"><span>LEGAL</span></label>
                <span class="footerContent">
                    <a href="{{route('terms')}}">Terms and conditions</a>
                    <a href="{{route('privacy')}}">Privacy Policy</a>
                    
                </span>
            </div>

            <!-- social -->
            <div>
                <label for="footerHead4" class="footerTitle"><span>SOCIAL</span></label>
                <span class="footerContent">
                  <a href="https://www.facebook.com/MedlyfGH/"><i class="fab fa-facebook" style="color: white;"></i> </a>  
                  <a href="https://www.twitter.com/MedlyfGhana/"><i class="fab fa-twitter" style="color: white;"></i> </a>  
                  <a href="https://www.instagram.com/medlyf_ghana/"><i class="fab fa-instagram" style="color: white;"></i> </a>  
                  <a href="https://www.linkedin.com/company/medlyf-ghana"><i class="fab fa-linkedin-in" style="color: white;"></i></a>  

                </span>
            </div>
        </div>
    </div>




    <script src="https://kit.fontawesome.com/4c3d866c75.js" crossorigin="anonymous"></script>
    <script src="{{asset('javascript/login.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
