
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #00004d;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color='white'>
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo"><br><br>
    <img src="{{ URL::to('/assets/img/1.png') }}" alt="Smiley face" style="float:left;width:40px;height:40px;"> 
       <h5 style="color:rgb(19, 4, 48)" &nbsp &nbsp>Document Tracker</h5><br><br><br>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'dashboard' == request()->path() ? 'active' : ''}}" >
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          
          <li class="{{ 'document' == request()->path() ? 'active' : ''}}">
            <a href="/document">
              <i class="fa fa-file"></i>
              <p>Manage Documents</p>
            </a>
          </li>
          
          </li>
          <li class="{{ 'role-register' == request()->path() ? 'active' : ''}}" >
            <a href="/role-register">
              <i class="now-ui-icons users_single-02"></i>
              <p>Manage Profiles</p>
            </a>
          </li>
          <li >
          </li>
          
          <li >

          
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button> 
            </div>
            <table style="width:100%">
            <tr>
            <th>&nbsp; &nbsp;</th> &nbsp;
            
            <th></th>
            <th></th>
            <th></th>
            <th></th>
             <th><h2></h2></th>
    
            </tr>
            <tr>
          
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           
         </tr>
            
  </table>

          
          </div>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">

            
              <li class="nav-item">
                 
                  
                 
                
              <ul class="nav navbar-nav navbar-right">
              
              <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{Auth::user()->name}} <span></span>
                                </a>

                                <div class="dropdown-content" >
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          {{ __('Logout')}}<br><br> 
                                          
                                        </a>

                                       

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>  
                                    <li><a href=" #" style="color:white;">Register</a></li>
                                </div>
                            </div>
                            </ul> 
              
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
      @yield('content')
        
          </div>
         
                        
                       
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              
              <li>
                <a href="http://www.sab.ac.lk/">
                  About Us
                </a>
              </li>
              <li>
                <a href="">
              Tel - 0453454519
              </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;2020, All rights reserved by Sabaragamuwa University of Sri Lanka, PO Box.02, Pambahinna, 70140, Sri Lanka 
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
</body>

</html>