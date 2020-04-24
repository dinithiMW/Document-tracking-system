<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" >

    <title>{{ config('app.name', 'Sabaragamuwa University Of Sri Lanka') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" style=" background-color: #ebebe0; height:700px">
        <nav class="navbar navbar-default navbar-static-top" style="color:white; background-color:  #00004d; height:80px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    
                    <!-- Branding Image  -->
                    <table style="width:100%">
            <tr>
            <th><img src="{{ URL::to('/assets/img/logo2.png') }}" alt="Smiley face" style="float:left;width:70px;height:70px;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
             <th><h2>Document Tracking System</h2></th>
    
            </tr>
            <tr>
          
         <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
            <td> </td>
         </tr>
  </table>
                </div> 
                

                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        @if (Auth::guest('admin'))
                            <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color:white;">Register</a></li> 
                        @else
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                               
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
