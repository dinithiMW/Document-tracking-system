
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
  <link href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"  />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <!--<link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="{{ asset('assets/css/dataTables.min.css') }}"  >
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

#header {
	background-color:#ccebff ;
	margin: 20px; 
	font-size: 30px;
	border-radius: 5px;
	font-color:#000033;
	
}
#navbar ul {
	padding: 15px;
	list-style-type: none;
	background-color: #668cff ;
	margin: 10px; 
	border-radius: 5px; 
	text-align: center;
}

#navbar ul li {
	
	display: inline-block   ;
}

#navbar ul li a {
	text-decoration: none;
	font-family: Arial;
	padding-right: 10PX;
	padding-left: 10PX;
	color: #fff;
	background-color: #668cff; 
	margin:20px;
}

#navbar ul li a:hover {
	
	color: #668cff;
	background-color: #fff; 
}


.vl {
  border-left: 6px solid grey;
  height: 10px;
}
i1 {
  border: solid grey;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}



.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}
.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
input[type=text]:focus {
  border: 1px solid #555;
}




  </style>
</head>

<body class="">  
  <div class="wrapper ">
    <div class="sidebar" data-color='white'>
      
       
    <div class="logo"><br><br>
    <img src="{{ URL::to('/assets/img/1.png') }}" alt="Smiley face" style="float:left;width:40px;height:40px;"> 
       <h5 style="color:rgb(19, 4, 48)" &nbsp &nbsp>Document Tracker</h5><br><br><br>
       
      </div> 
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li class="{{ 'home' == request()->path() ? 'active' : ''}}" >
            <a href="/home">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="{{ 'viewdocument' == request()->path() ? 'active' : ''}}">
            <a href="/viewdocument">
              <i class="fa fa-plus"></i>
              <p> Scan Barcode</p>
            </a>
          </li>
          <li class="{{ 'search' == request()->path() ? 'active' : ''}}">
            <a href="/search">
              <i class="fa fa-search"></i>
              <p>Search Document</p>
            </a>
          </li>
          
          
          
          <li class="{{ 'changeProfile/{id} ' == request()->path() ? 'active' : ''}}">
            <a href="/changeProfile/{{ Auth::user()->id }}">
              <i class="now-ui-icons users_single-02"></i>
              <p> Update Profile</p>
            </a>
          </li>

          
         
        </ul>
      </div>
    </div> 
    <div class="main-panel" id="main-panel">  

    
     
 <!-- <div id="navbar">
		
<ul>
	
	<li><a href="home.html">Home</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="products.html">Products</a></li>
	
</ul>

	</div>   -->
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" >
        <div class="container">
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
            <th></th> &nbsp;
            
            <th></th>
            <th></th>
            <th></th>
            <th></th>
             <th><h5><br></h5></th>
    
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
                 
              </li> 
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
                                </div>
                            </div>
                            </ul> 
              
             
            </ul> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
              <!--
             <li class="nav-item">
                <a class="nav-link" href="/changeProfile/{{ Auth::user()->id }}">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>  -->
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- End Navbar -->
      <!--style="background-color:#00264d"-->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" > 
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
  <script src="{{ asset('assets/js/dataTables.min.js')}}"></script>
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