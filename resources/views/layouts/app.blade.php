<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}  | Unbox Happiness</title>
     
     <!-- Font awsome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet"> 

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo1.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->fname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    
    <footer>
      <div class="container">
          <div class="row">
             <div class="col-md-3">
                 <img class="logo-img" src="/img/logo1.png">
             </div>
             <div class="col-md-2 hidden-xs hidden-sm">
                 <h3>Important Links</h3>
                 <ul>
                      <li><a href="#">Register Restaurant</a></li>
                     <li><a href="#">Track Order</a></li>
                     <li><a href="#">Contact Us</a></li>
                 </ul>
             </div>
             <div class="col-md-2 hidden-xs hidden-sm">
                 <h3>About Us</h3>
                 <ul>
                      <li><a href="#">Our Team</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Terms &amp; Conditions</a></li>
                 </ul>
             </div>

               <div class="col-md-2 hidden-xs hidden-sm">
                 <h3>Partners</h3>
                 <ul>
                      <li><a href="#">About Trumpets</a></li>
                     <li><a href="#">Sponsors</a></li>
                     <li><a href="#">Accounts</a></li>
                 </ul>
             </div>

             <div class="col-md-3">
                 <ul class="social">
                     <li><a href=""><i class="fa fa-facebook"></i></a></li>
                     <li><a href=""><i class="fa fa-twitter"></i></a></li>
                     <li><a href=""><i class="fa fa-instagram"></i></a></li>
                     <li><a href=""><i class="fa fa-youtube"></i></a></li>
                     <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                     <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                 </ul>
             </div>
              
          </div>
      </div>
      
    </footer>

    <div id="powered-by"> 
         <p>All Rights Reserved. Powered By <a href="http://www.trumpetstechnologies.com" target="_blank">Trumpets Technologies Pvt. Ltd.</a></p>
      </div>



    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
